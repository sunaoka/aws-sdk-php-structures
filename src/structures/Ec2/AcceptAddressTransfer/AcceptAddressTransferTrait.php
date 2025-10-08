<?php

namespace Sunaoka\Aws\Structures\Ec2\AcceptAddressTransfer;

trait AcceptAddressTransferTrait
{
    /**
     * @param AcceptAddressTransferRequest $args
     * @return AcceptAddressTransferResponse
     */
    public function acceptAddressTransfer(AcceptAddressTransferRequest $args)
    {
        $result = parent::acceptAddressTransfer($args->toArray());
        return new AcceptAddressTransferResponse($result->toArray());
    }
}
