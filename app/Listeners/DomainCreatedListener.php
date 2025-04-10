<?php

class DomainCreatedListener
{
    public function handle($event)
    {
        // Assuming $event contains the domain information
        $domain = $event->domain;

    }
}