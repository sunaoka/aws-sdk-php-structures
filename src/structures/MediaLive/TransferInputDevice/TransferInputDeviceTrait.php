<?php

namespace Sunaoka\Aws\Structures\MediaLive\TransferInputDevice;

trait TransferInputDeviceTrait
{
    /**
     * @param TransferInputDeviceRequest $args
     * @return TransferInputDeviceResponse
     */
    public function transferInputDevice(TransferInputDeviceRequest $args)
    {
        $result = parent::transferInputDevice($args->toArray());
        return new TransferInputDeviceResponse($result->toArray());
    }
}
