<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableAddressTransfer;

trait EnableAddressTransferTrait
{
    /**
     * @param EnableAddressTransferRequest $args
     * @return EnableAddressTransferResponse
     */
    public function enableAddressTransfer(EnableAddressTransferRequest $args)
    {
        $result = parent::enableAddressTransfer($args->toArray());
        return new EnableAddressTransferResponse($result->toArray());
    }
}
