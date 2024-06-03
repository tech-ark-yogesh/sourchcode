/* When we want to get Job Id from  dispatch Job */
try
{
    if (Carbon::parse($notification->trigger_time)->ne(Carbon::parse($request->trigger_time))) {
        DB::table('jobs')->where('id', $notification->job_id)->delete();
        $job = new NotificationJob($request->all());

        if ($request->type !== 'now') {
            $job->delay($trigger_time);
        }

        $jobId = app(\Illuminate\Contracts\Bus\Dispatcher::class)->dispatch($job);
        $request->merge(['job_id' => $jobId]);
    }
    $notification->update($request->all());
    return response()->json([
        'success' => true,
        'message' => 'The Push notification has been updated successfully!',
    ]);
} catch (\Exception $e) {
    \Log::error('Push Notification Create Error: ' . $e->getMessage());
    return response()->json([
        'success' => false,
        'message' => 'Something went wrong. Please try again.',
    ]);
}
