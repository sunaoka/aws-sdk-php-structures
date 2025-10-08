<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListInputDeviceTransfers;

trait ListInputDeviceTransfersTrait
{
    /**
     * @param ListInputDeviceTransfersRequest $args
     * @return ListInputDeviceTransfersResponse
     */
    public function listInputDeviceTransfers(ListInputDeviceTransfersRequest $args)
    {
        $result = parent::listInputDeviceTransfers($args->toArray());
        return new ListInputDeviceTransfersResponse($result->toArray());
    }
}
