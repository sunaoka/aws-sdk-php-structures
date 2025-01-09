<?php

namespace Sunaoka\Aws\Structures\Invoicing\BatchGetInvoiceProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $ReceiverName
 * @property ReceiverAddress $ReceiverAddress
 * @property string $ReceiverEmail
 * @property string $Issuer
 * @property string $TaxRegistrationNumber
 */
class InvoiceProfile extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     ReceiverName?: string,
     *     ReceiverAddress?: ReceiverAddress,
     *     ReceiverEmail?: string,
     *     Issuer?: string,
     *     TaxRegistrationNumber?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
