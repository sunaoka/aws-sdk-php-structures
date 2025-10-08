<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableAddressTransfer;

trait DisableAddressTransferTrait
{
    /**
     * @param DisableAddressTransferRequest $args
     * @return DisableAddressTransferResponse
     */
    public function disableAddressTransfer(DisableAddressTransferRequest $args)
    {
        $result = parent::disableAddressTransfer($args->toArray());
        return new DisableAddressTransferResponse($result->toArray());
    }
}
