<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\DescribeAgreement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $agreementValue
 * @property string|null $currencyCode
 */
class EstimatedCharges extends Shape
{
    /**
     * @param array{
     *     agreementValue?: string|null,
     *     currencyCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
