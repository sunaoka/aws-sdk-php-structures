<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutLogGroupDeletionProtection;

trait PutLogGroupDeletionProtectionTrait
{
    /**
     * @param PutLogGroupDeletionProtectionRequest $args
     * @return void
     */
    public function putLogGroupDeletionProtection(PutLogGroupDeletionProtectionRequest $args)
    {
        parent::putLogGroupDeletionProtection($args->toArray());
    }
}
