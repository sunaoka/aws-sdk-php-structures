<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTableBucketStorageClass;

trait PutTableBucketStorageClassTrait
{
    /**
     * @param PutTableBucketStorageClassRequest $args
     * @return void
     */
    public function putTableBucketStorageClass(PutTableBucketStorageClassRequest $args)
    {
        parent::putTableBucketStorageClass($args->toArray());
    }
}
