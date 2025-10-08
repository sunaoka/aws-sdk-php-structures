<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeDevice;

trait DescribeDeviceTrait
{
    /**
     * @param DescribeDeviceRequest $args
     * @return DescribeDeviceResponse
     */
    public function describeDevice(DescribeDeviceRequest $args)
    {
        $result = parent::describeDevice($args->toArray());
        return new DescribeDeviceResponse($result->toArray());
    }
}
