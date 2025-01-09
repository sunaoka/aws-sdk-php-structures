<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetCostEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $usageType
 * @property list<EstimateByTime> $resultsByTime
 */
class CostEstimate extends Shape
{
    /**
     * @param array{
     *     usageType?: string,
     *     resultsByTime?: list<EstimateByTime>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
