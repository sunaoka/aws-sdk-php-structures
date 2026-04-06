<?php

namespace Sunaoka\Aws\Structures\S3Tables\CreateTableBucket;

trait CreateTableBucketTrait
{
    /**
     * @param CreateTableBucketRequest $args
     * @return CreateTableBucketResponse
     */
    public function createTableBucket(CreateTableBucketRequest $args)
    {
        $result = parent::createTableBucket($args->toArray());
        return new CreateTableBucketResponse($result->toArray());
    }
}
