<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OnDemandCost
 */
class CoverageCost extends Shape
{
    /**
     * @param array{OnDemandCost?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
