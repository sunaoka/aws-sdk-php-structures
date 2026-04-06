<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeDiscoveryJob;

trait DescribeDiscoveryJobTrait
{
    /**
     * @param DescribeDiscoveryJobRequest $args
     * @return DescribeDiscoveryJobResponse
     */
    public function describeDiscoveryJob(DescribeDiscoveryJobRequest $args)
    {
        $result = parent::describeDiscoveryJob($args->toArray());
        return new DescribeDiscoveryJobResponse($result->toArray());
    }
}
