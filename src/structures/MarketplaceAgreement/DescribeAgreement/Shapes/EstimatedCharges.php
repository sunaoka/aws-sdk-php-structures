<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\DescribeAgreement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agreementValue
 * @property string $currencyCode
 */
class EstimatedCharges extends Shape
{
    /**
     * @param array{
     *     agreementValue?: string,
     *     currencyCode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
