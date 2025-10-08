<?php

namespace Sunaoka\Aws\Structures\Kinesis\DescribeLimits;

trait DescribeLimitsTrait
{
    /**
     * @param DescribeLimitsRequest $args
     * @return DescribeLimitsResponse
     */
    public function describeLimits(DescribeLimitsRequest $args)
    {
        $result = parent::describeLimits($args->toArray());
        return new DescribeLimitsResponse($result->toArray());
    }
}
