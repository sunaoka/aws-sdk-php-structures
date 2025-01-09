<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EC2Specification $EC2Specification
 */
class ServiceSpecification extends Shape
{
    /**
     * @param array{EC2Specification?: EC2Specification} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
