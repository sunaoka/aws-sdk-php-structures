<?php

namespace Sunaoka\Aws\Structures\CognitoSync\UpdateRecords;

trait UpdateRecordsTrait
{
    /**
     * @param UpdateRecordsRequest $args
     * @return UpdateRecordsResponse
     */
    public function updateRecords(UpdateRecordsRequest $args)
    {
        $result = parent::updateRecords($args->toArray());
        return new UpdateRecordsResponse($result->toArray());
    }
}
