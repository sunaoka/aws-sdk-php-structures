<?php

namespace Sunaoka\Aws\Structures\TaxSettings\GetTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $enterpriseIdentificationNumber
 * @property string|null $electronicTransactionCodeNumber
 * @property string|null $paymentVoucherNumber
 * @property string|null $paymentVoucherNumberDate
 */
class VietnamAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     enterpriseIdentificationNumber?: string|null,
     *     electronicTransactionCodeNumber?: string|null,
     *     paymentVoucherNumber?: string|null,
     *     paymentVoucherNumberDate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
