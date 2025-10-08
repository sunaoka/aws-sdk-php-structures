<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationSmb;

trait DescribeLocationSmbTrait
{
    /**
     * @param DescribeLocationSmbRequest $args
     * @return DescribeLocationSmbResponse
     */
    public function describeLocationSmb(DescribeLocationSmbRequest $args)
    {
        $result = parent::describeLocationSmb($args->toArray());
        return new DescribeLocationSmbResponse($result->toArray());
    }
}
