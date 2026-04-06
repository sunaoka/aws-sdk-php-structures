<?php

namespace Sunaoka\Aws\Structures\Invoicing\BatchGetInvoiceProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $ReceiverName
 * @property ReceiverAddress|null $ReceiverAddress
 * @property string|null $ReceiverEmail
 * @property string|null $Issuer
 * @property string|null $TaxRegistrationNumber
 */
class InvoiceProfile extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     ReceiverName?: string|null,
     *     ReceiverAddress?: ReceiverAddress|null,
     *     ReceiverEmail?: string|null,
     *     Issuer?: string|null,
     *     TaxRegistrationNumber?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
