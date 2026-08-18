<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeliveryOptionId
 */
class AMISecuritySummary extends Shape
{
    /**
     * @param array{DeliveryOptionId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
