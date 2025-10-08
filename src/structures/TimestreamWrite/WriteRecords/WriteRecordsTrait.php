<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\WriteRecords;

trait WriteRecordsTrait
{
    /**
     * @param WriteRecordsRequest $args
     * @return WriteRecordsResponse
     */
    public function writeRecords(WriteRecordsRequest $args)
    {
        $result = parent::writeRecords($args->toArray());
        return new WriteRecordsResponse($result->toArray());
    }
}
