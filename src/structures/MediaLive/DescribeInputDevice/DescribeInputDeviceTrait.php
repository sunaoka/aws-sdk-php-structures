<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeInputDevice;

trait DescribeInputDeviceTrait
{
    /**
     * @param DescribeInputDeviceRequest $args
     * @return DescribeInputDeviceResponse
     */
    public function describeInputDevice(DescribeInputDeviceRequest $args)
    {
        $result = parent::describeInputDevice($args->toArray());
        return new DescribeInputDeviceResponse($result->toArray());
    }
}
