<?php

namespace Sunaoka\Aws\Structures\Panorama\CreateJobForDevices;

trait CreateJobForDevicesTrait
{
    /**
     * @param CreateJobForDevicesRequest $args
     * @return CreateJobForDevicesResponse
     */
    public function createJobForDevices(CreateJobForDevicesRequest $args)
    {
        $result = parent::createJobForDevices($args->toArray());
        return new CreateJobForDevicesResponse($result->toArray());
    }
}
