<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableBucketStorageClass;

trait GetTableBucketStorageClassTrait
{
    /**
     * @param GetTableBucketStorageClassRequest $args
     * @return GetTableBucketStorageClassResponse
     */
    public function getTableBucketStorageClass(GetTableBucketStorageClassRequest $args)
    {
        $result = parent::getTableBucketStorageClass($args->toArray());
        return new GetTableBucketStorageClassResponse($result->toArray());
    }
}
