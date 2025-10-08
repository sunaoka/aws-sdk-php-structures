<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListInputDevices;

trait ListInputDevicesTrait
{
    /**
     * @param ListInputDevicesRequest $args
     * @return ListInputDevicesResponse
     */
    public function listInputDevices(ListInputDevicesRequest $args)
    {
        $result = parent::listInputDevices($args->toArray());
        return new ListInputDevicesResponse($result->toArray());
    }
}
