<?php

namespace Sunaoka\Aws\Structures\MediaLive\RejectInputDeviceTransfer;

trait RejectInputDeviceTransferTrait
{
    /**
     * @param RejectInputDeviceTransferRequest $args
     * @return RejectInputDeviceTransferResponse
     */
    public function rejectInputDeviceTransfer(RejectInputDeviceTransferRequest $args)
    {
        $result = parent::rejectInputDeviceTransfer($args->toArray());
        return new RejectInputDeviceTransferResponse($result->toArray());
    }
}
