<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutDestinationPolicy;

trait PutDestinationPolicyTrait
{
    /**
     * @param PutDestinationPolicyRequest $args
     * @return void
     */
    public function putDestinationPolicy(PutDestinationPolicyRequest $args)
    {
        parent::putDestinationPolicy($args->toArray());
    }
}
