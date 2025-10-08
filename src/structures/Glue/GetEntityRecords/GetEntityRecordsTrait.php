<?php

namespace Sunaoka\Aws\Structures\Glue\GetEntityRecords;

trait GetEntityRecordsTrait
{
    /**
     * @param GetEntityRecordsRequest $args
     * @return GetEntityRecordsResponse
     */
    public function getEntityRecords(GetEntityRecordsRequest $args)
    {
        $result = parent::getEntityRecords($args->toArray());
        return new GetEntityRecordsResponse($result->toArray());
    }
}
