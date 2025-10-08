<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeDeviceJob;

trait DescribeDeviceJobTrait
{
    /**
     * @param DescribeDeviceJobRequest $args
     * @return DescribeDeviceJobResponse
     */
    public function describeDeviceJob(DescribeDeviceJobRequest $args)
    {
        $result = parent::describeDeviceJob($args->toArray());
        return new DescribeDeviceJobResponse($result->toArray());
    }
}
