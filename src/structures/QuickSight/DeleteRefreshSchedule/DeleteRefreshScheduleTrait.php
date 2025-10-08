<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteRefreshSchedule;

trait DeleteRefreshScheduleTrait
{
    /**
     * @param DeleteRefreshScheduleRequest $args
     * @return DeleteRefreshScheduleResponse
     */
    public function deleteRefreshSchedule(DeleteRefreshScheduleRequest $args)
    {
        $result = parent::deleteRefreshSchedule($args->toArray());
        return new DeleteRefreshScheduleResponse($result->toArray());
    }
}
