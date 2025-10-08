<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteRetentionPolicy;

trait DeleteRetentionPolicyTrait
{
    /**
     * @param DeleteRetentionPolicyRequest $args
     * @return void
     */
    public function deleteRetentionPolicy(DeleteRetentionPolicyRequest $args)
    {
        parent::deleteRetentionPolicy($args->toArray());
    }
}
