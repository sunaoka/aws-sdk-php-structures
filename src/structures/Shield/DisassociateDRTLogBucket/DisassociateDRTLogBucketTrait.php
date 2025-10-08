<?php

namespace Sunaoka\Aws\Structures\Shield\DisassociateDRTLogBucket;

trait DisassociateDRTLogBucketTrait
{
    /**
     * @param DisassociateDRTLogBucketRequest $args
     * @return DisassociateDRTLogBucketResponse
     */
    public function disassociateDRTLogBucket(DisassociateDRTLogBucketRequest $args)
    {
        $result = parent::disassociateDRTLogBucket($args->toArray());
        return new DisassociateDRTLogBucketResponse($result->toArray());
    }
}
