<?php

namespace Sunaoka\Aws\Structures\FreeTier\GetFreeTierUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $service
 * @property string|null $operation
 * @property string|null $usageType
 * @property string|null $region
 * @property double|null $actualUsageAmount
 * @property double|null $forecastedUsageAmount
 * @property double|null $limit
 * @property string|null $unit
 * @property string|null $description
 * @property string|null $freeTierType
 */
class FreeTierUsage extends Shape
{
    /**
     * @param array{
     *     service?: string|null,
     *     operation?: string|null,
     *     usageType?: string|null,
     *     region?: string|null,
     *     actualUsageAmount?: double|null,
     *     forecastedUsageAmount?: double|null,
     *     limit?: double|null,
     *     unit?: string|null,
     *     description?: string|null,
     *     freeTierType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
