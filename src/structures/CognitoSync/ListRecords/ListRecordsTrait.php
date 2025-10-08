<?php

namespace Sunaoka\Aws\Structures\CognitoSync\ListRecords;

trait ListRecordsTrait
{
    /**
     * @param ListRecordsRequest $args
     * @return ListRecordsResponse
     */
    public function listRecords(ListRecordsRequest $args)
    {
        $result = parent::listRecords($args->toArray());
        return new ListRecordsResponse($result->toArray());
    }
}
