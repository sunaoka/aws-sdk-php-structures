<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\ListS3Buckets;

trait ListS3BucketsTrait
{
    /**
     * @param ListS3BucketsRequest $args
     * @return ListS3BucketsResponse
     */
    public function listS3Buckets(ListS3BucketsRequest $args)
    {
        $result = parent::listS3Buckets($args->toArray());
        return new ListS3BucketsResponse($result->toArray());
    }
}
