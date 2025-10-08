<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteSubscriptionFilter;

trait DeleteSubscriptionFilterTrait
{
    /**
     * @param DeleteSubscriptionFilterRequest $args
     * @return void
     */
    public function deleteSubscriptionFilter(DeleteSubscriptionFilterRequest $args)
    {
        parent::deleteSubscriptionFilter($args->toArray());
    }
}
