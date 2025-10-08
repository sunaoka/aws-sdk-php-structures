<?php

namespace Sunaoka\Aws\Structures\MediaLive\AcceptInputDeviceTransfer;

trait AcceptInputDeviceTransferTrait
{
    /**
     * @param AcceptInputDeviceTransferRequest $args
     * @return AcceptInputDeviceTransferResponse
     */
    public function acceptInputDeviceTransfer(AcceptInputDeviceTransferRequest $args)
    {
        $result = parent::acceptInputDeviceTransfer($args->toArray());
        return new AcceptInputDeviceTransferResponse($result->toArray());
    }
}
