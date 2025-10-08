<?php

namespace Sunaoka\Aws\Structures\Shield\AssociateDRTLogBucket;

trait AssociateDRTLogBucketTrait
{
    /**
     * @param AssociateDRTLogBucketRequest $args
     * @return AssociateDRTLogBucketResponse
     */
    public function associateDRTLogBucket(AssociateDRTLogBucketRequest $args)
    {
        $result = parent::associateDRTLogBucket($args->toArray());
        return new AssociateDRTLogBucketResponse($result->toArray());
    }
}
