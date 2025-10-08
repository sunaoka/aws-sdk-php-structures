<?php

namespace Sunaoka\Aws\Structures\Kms\ScheduleKeyDeletion;

trait ScheduleKeyDeletionTrait
{
    /**
     * @param ScheduleKeyDeletionRequest $args
     * @return ScheduleKeyDeletionResponse
     */
    public function scheduleKeyDeletion(ScheduleKeyDeletionRequest $args)
    {
        $result = parent::scheduleKeyDeletion($args->toArray());
        return new ScheduleKeyDeletionResponse($result->toArray());
    }
}
