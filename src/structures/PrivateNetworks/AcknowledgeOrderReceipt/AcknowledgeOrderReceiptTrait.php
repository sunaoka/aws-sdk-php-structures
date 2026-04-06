<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\AcknowledgeOrderReceipt;

trait AcknowledgeOrderReceiptTrait
{
    /**
     * @param AcknowledgeOrderReceiptRequest $args
     * @return AcknowledgeOrderReceiptResponse
     */
    public function acknowledgeOrderReceipt(AcknowledgeOrderReceiptRequest $args)
    {
        $result = parent::acknowledgeOrderReceipt($args->toArray());
        return new AcknowledgeOrderReceiptResponse($result->toArray());
    }
}
