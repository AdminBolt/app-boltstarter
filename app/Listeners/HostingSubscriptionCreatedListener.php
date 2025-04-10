<?php

class HostingSubscriptionCreatedListener
{
    public function handle($event)
    {
        // Handle the event when a hosting subscription is created
        // You can access the subscription details from $event->subscription
        $subscription = $event->subscription;

        // Perform any necessary actions, such as sending notifications or updating records
        // For example:
        // \Log::info('New hosting subscription created: ' . $subscription->id);
    }
}