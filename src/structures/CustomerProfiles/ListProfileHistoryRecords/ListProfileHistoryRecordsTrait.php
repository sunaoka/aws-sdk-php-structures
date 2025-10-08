<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListProfileHistoryRecords;

trait ListProfileHistoryRecordsTrait
{
    /**
     * @param ListProfileHistoryRecordsRequest $args
     * @return ListProfileHistoryRecordsResponse
     */
    public function listProfileHistoryRecords(ListProfileHistoryRecordsRequest $args)
    {
        $result = parent::listProfileHistoryRecords($args->toArray());
        return new ListProfileHistoryRecordsResponse($result->toArray());
    }
}
