<?php

namespace Sunaoka\Aws\Structures\Braket\SearchDevices;

trait SearchDevicesTrait
{
    /**
     * @param SearchDevicesRequest $args
     * @return SearchDevicesResponse
     */
    public function searchDevices(SearchDevicesRequest $args)
    {
        $result = parent::searchDevices($args->toArray());
        return new SearchDevicesResponse($result->toArray());
    }
}
