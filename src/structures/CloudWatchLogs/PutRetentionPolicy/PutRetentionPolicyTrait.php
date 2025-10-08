<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutRetentionPolicy;

trait PutRetentionPolicyTrait
{
    /**
     * @param PutRetentionPolicyRequest $args
     * @return void
     */
    public function putRetentionPolicy(PutRetentionPolicyRequest $args)
    {
        parent::putRetentionPolicy($args->toArray());
    }
}
