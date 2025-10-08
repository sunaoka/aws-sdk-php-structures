<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestSetRecords;

trait ListTestSetRecordsTrait
{
    /**
     * @param ListTestSetRecordsRequest $args
     * @return ListTestSetRecordsResponse
     */
    public function listTestSetRecords(ListTestSetRecordsRequest $args)
    {
        $result = parent::listTestSetRecords($args->toArray());
        return new ListTestSetRecordsResponse($result->toArray());
    }
}
