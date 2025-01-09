<?php

namespace Sunaoka\Aws\Structures\FreeTier\GetFreeTierUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $actualUsageAmount
 * @property string $description
 * @property double $forecastedUsageAmount
 * @property string $freeTierType
 * @property double $limit
 * @property string $operation
 * @property string $region
 * @property string $service
 * @property string $unit
 * @property string $usageType
 */
class FreeTierUsage extends Shape
{
    /**
     * @param array{
     *     actualUsageAmount?: double,
     *     description?: string,
     *     forecastedUsageAmount?: double,
     *     freeTierType?: string,
     *     limit?: double,
     *     operation?: string,
     *     region?: string,
     *     service?: string,
     *     unit?: string,
     *     usageType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
