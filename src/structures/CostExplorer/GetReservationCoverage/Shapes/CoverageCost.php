<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OnDemandCost
 */
class CoverageCost extends Shape
{
    /**
     * @param array{OnDemandCost?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
