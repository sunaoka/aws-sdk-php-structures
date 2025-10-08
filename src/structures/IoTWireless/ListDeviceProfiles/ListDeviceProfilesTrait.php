<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListDeviceProfiles;

trait ListDeviceProfilesTrait
{
    /**
     * @param ListDeviceProfilesRequest $args
     * @return ListDeviceProfilesResponse
     */
    public function listDeviceProfiles(ListDeviceProfilesRequest $args)
    {
        $result = parent::listDeviceProfiles($args->toArray());
        return new ListDeviceProfilesResponse($result->toArray());
    }
}
