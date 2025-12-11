<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableRecordExpirationJobStatus;

trait GetTableRecordExpirationJobStatusTrait
{
    /**
     * @param GetTableRecordExpirationJobStatusRequest $args
     * @return GetTableRecordExpirationJobStatusResponse
     */
    public function getTableRecordExpirationJobStatus(GetTableRecordExpirationJobStatusRequest $args)
    {
        $result = parent::getTableRecordExpirationJobStatus($args->toArray());
        return new GetTableRecordExpirationJobStatusResponse($result->toArray());
    }
}
