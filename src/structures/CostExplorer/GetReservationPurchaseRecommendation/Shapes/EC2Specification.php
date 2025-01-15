<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STANDARD'|'CONVERTIBLE'|null $OfferingClass
 */
class EC2Specification extends Shape
{
    /**
     * @param array{OfferingClass?: 'STANDARD'|'CONVERTIBLE'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
