<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\ListAgreementInvoiceLineItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $amount
 * @property string|null $maxAdjustmentAmount
 * @property string|null $currencyCode
 */
class PricingCurrencyAmount extends Shape
{
    /**
     * @param array{
     *     amount?: string|null,
     *     maxAdjustmentAmount?: string|null,
     *     currencyCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
