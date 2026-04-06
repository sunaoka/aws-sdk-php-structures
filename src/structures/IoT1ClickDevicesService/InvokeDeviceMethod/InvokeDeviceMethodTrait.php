<?php

namespace Sunaoka\Aws\Structures\IoT1ClickDevicesService\InvokeDeviceMethod;

trait InvokeDeviceMethodTrait
{
    /**
     * @param InvokeDeviceMethodRequest $args
     * @return InvokeDeviceMethodResponse
     */
    public function invokeDeviceMethod(InvokeDeviceMethodRequest $args)
    {
        $result = parent::invokeDeviceMethod($args->toArray());
        return new InvokeDeviceMethodResponse($result->toArray());
    }
}
