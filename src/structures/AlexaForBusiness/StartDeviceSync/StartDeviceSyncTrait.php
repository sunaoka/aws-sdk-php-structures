<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\StartDeviceSync;

trait StartDeviceSyncTrait
{
    /**
     * @param StartDeviceSyncRequest $args
     * @return StartDeviceSyncResponse
     */
    public function startDeviceSync(StartDeviceSyncRequest $args)
    {
        $result = parent::startDeviceSync($args->toArray());
        return new StartDeviceSyncResponse($result->toArray());
    }
}
