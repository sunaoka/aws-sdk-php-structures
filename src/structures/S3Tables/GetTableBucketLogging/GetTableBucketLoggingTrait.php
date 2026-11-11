<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableBucketLogging;

trait GetTableBucketLoggingTrait
{
    /**
     * @param GetTableBucketLoggingRequest $args
     * @return GetTableBucketLoggingResponse
     */
    public function getTableBucketLogging(GetTableBucketLoggingRequest $args)
    {
        $result = parent::getTableBucketLogging($args->toArray());
        return new GetTableBucketLoggingResponse($result->toArray());
    }
}
