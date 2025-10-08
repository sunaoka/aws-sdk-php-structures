<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\BatchAssociateClientDeviceWithCoreDevice;

trait BatchAssociateClientDeviceWithCoreDeviceTrait
{
    /**
     * @param BatchAssociateClientDeviceWithCoreDeviceRequest $args
     * @return BatchAssociateClientDeviceWithCoreDeviceResponse
     */
    public function batchAssociateClientDeviceWithCoreDevice(BatchAssociateClientDeviceWithCoreDeviceRequest $args)
    {
        $result = parent::batchAssociateClientDeviceWithCoreDevice($args->toArray());
        return new BatchAssociateClientDeviceWithCoreDeviceResponse($result->toArray());
    }
}
