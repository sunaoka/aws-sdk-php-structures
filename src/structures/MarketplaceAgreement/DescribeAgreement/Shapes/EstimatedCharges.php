<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\DescribeAgreement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $currencyCode
 * @property string|null $agreementValue
 */
class EstimatedCharges extends Shape
{
    /**
     * @param array{
     *     currencyCode?: string|null,
     *     agreementValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
