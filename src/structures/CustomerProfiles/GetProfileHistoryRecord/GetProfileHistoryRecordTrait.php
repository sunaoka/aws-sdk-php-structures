<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetProfileHistoryRecord;

trait GetProfileHistoryRecordTrait
{
    /**
     * @param GetProfileHistoryRecordRequest $args
     * @return GetProfileHistoryRecordResponse
     */
    public function getProfileHistoryRecord(GetProfileHistoryRecordRequest $args)
    {
        $result = parent::getProfileHistoryRecord($args->toArray());
        return new GetProfileHistoryRecordResponse($result->toArray());
    }
}
