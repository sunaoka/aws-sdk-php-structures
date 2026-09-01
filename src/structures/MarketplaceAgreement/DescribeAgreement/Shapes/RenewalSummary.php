<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\DescribeAgreement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $offerId
 */
class RenewalSummary extends Shape
{
    /**
     * @param array{offerId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
