<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\BatchDisassociateClientDeviceFromCoreDevice;

trait BatchDisassociateClientDeviceFromCoreDeviceTrait
{
    /**
     * @param BatchDisassociateClientDeviceFromCoreDeviceRequest $args
     * @return BatchDisassociateClientDeviceFromCoreDeviceResponse
     */
    public function batchDisassociateClientDeviceFromCoreDevice(BatchDisassociateClientDeviceFromCoreDeviceRequest $args)
    {
        $result = parent::batchDisassociateClientDeviceFromCoreDevice($args->toArray());
        return new BatchDisassociateClientDeviceFromCoreDeviceResponse($result->toArray());
    }
}
