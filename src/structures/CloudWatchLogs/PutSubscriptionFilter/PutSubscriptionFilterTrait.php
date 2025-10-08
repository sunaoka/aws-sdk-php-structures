<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutSubscriptionFilter;

trait PutSubscriptionFilterTrait
{
    /**
     * @param PutSubscriptionFilterRequest $args
     * @return void
     */
    public function putSubscriptionFilter(PutSubscriptionFilterRequest $args)
    {
        parent::putSubscriptionFilter($args->toArray());
    }
}
