<?php

namespace Sunaoka\Aws\Structures\MediaLive\CancelInputDeviceTransfer;

trait CancelInputDeviceTransferTrait
{
    /**
     * @param CancelInputDeviceTransferRequest $args
     * @return CancelInputDeviceTransferResponse
     */
    public function cancelInputDeviceTransfer(CancelInputDeviceTransferRequest $args)
    {
        $result = parent::cancelInputDeviceTransfer($args->toArray());
        return new CancelInputDeviceTransferResponse($result->toArray());
    }
}
