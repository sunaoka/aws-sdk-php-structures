<?php

namespace Sunaoka\Aws\Structures\S3\ListBuckets;

trait ListBucketsTrait
{
    /**
     * @return ListBucketsResponse
     */
    public function listBuckets()
    {
        $result = parent::listBuckets();
        return new ListBucketsResponse($result->toArray());
    }
}
