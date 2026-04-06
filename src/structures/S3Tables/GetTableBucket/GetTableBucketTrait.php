<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableBucket;

trait GetTableBucketTrait
{
    /**
     * @param GetTableBucketRequest $args
     * @return GetTableBucketResponse
     */
    public function getTableBucket(GetTableBucketRequest $args)
    {
        $result = parent::getTableBucket($args->toArray());
        return new GetTableBucketResponse($result->toArray());
    }
}
