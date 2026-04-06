<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $type
 * @property string|null $currencyCode
 * @property string|null $maxTotalChargeAmount
 * @property VariablePaymentTermConfiguration|null $configuration
 */
class VariablePaymentTerm extends Shape
{
    /**
     * @param array{
     *     type?: string|null,
     *     currencyCode?: string|null,
     *     maxTotalChargeAmount?: string|null,
     *     configuration?: VariablePaymentTermConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
