<?php

namespace Sunaoka\Aws\Structures\KeyspacesStreams\GetRecords;

trait GetRecordsTrait
{
    /**
     * @param GetRecordsRequest $args
     * @return GetRecordsResponse
     */
    public function getRecords(GetRecordsRequest $args)
    {
        $result = parent::getRecords($args->toArray());
        return new GetRecordsResponse($result->toArray());
    }
}
