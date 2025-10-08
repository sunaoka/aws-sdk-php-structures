<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLogRecord;

trait GetLogRecordTrait
{
    /**
     * @param GetLogRecordRequest $args
     * @return GetLogRecordResponse
     */
    public function getLogRecord(GetLogRecordRequest $args)
    {
        $result = parent::getLogRecord($args->toArray());
        return new GetLogRecordResponse($result->toArray());
    }
}
