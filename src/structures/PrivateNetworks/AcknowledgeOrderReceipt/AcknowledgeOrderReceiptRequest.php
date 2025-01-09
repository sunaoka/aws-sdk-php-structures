<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\AcknowledgeOrderReceipt;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $orderArn
 */
class AcknowledgeOrderReceiptRequest extends Request
{
    /**
     * @param array{orderArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
