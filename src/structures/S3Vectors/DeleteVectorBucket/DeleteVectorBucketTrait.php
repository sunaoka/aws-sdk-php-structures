<?php

namespace Sunaoka\Aws\Structures\S3Vectors\DeleteVectorBucket;

trait DeleteVectorBucketTrait
{
    /**
     * @param DeleteVectorBucketRequest $args
     * @return DeleteVectorBucketResponse
     */
    public function deleteVectorBucket(DeleteVectorBucketRequest $args)
    {
        $result = parent::deleteVectorBucket($args->toArray());
        return new DeleteVectorBucketResponse($result->toArray());
    }
}
