<?php

namespace Sunaoka\Aws\Structures\IoTWireless\TestWirelessDevice;

trait TestWirelessDeviceTrait
{
    /**
     * @param TestWirelessDeviceRequest $args
     * @return TestWirelessDeviceResponse
     */
    public function testWirelessDevice(TestWirelessDeviceRequest $args)
    {
        $result = parent::testWirelessDevice($args->toArray());
        return new TestWirelessDeviceResponse($result->toArray());
    }
}
