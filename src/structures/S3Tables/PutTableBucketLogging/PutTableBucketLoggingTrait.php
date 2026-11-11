<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTableBucketLogging;

trait PutTableBucketLoggingTrait
{
    /**
     * @param PutTableBucketLoggingRequest $args
     * @return void
     */
    public function putTableBucketLogging(PutTableBucketLoggingRequest $args)
    {
        parent::putTableBucketLogging($args->toArray());
    }
}
