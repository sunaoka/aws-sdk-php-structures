<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeBuckets;

trait DescribeBucketsTrait
{
    /**
     * @param DescribeBucketsRequest $args
     * @return DescribeBucketsResponse
     */
    public function describeBuckets(DescribeBucketsRequest $args)
    {
        $result = parent::describeBuckets($args->toArray());
        return new DescribeBucketsResponse($result->toArray());
    }
}
