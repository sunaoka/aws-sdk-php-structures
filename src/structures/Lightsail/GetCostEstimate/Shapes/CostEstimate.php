<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetCostEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $usageType
 * @property list<EstimateByTime>|null $resultsByTime
 */
class CostEstimate extends Shape
{
    /**
     * @param array{
     *     usageType?: string|null,
     *     resultsByTime?: list<EstimateByTime>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
