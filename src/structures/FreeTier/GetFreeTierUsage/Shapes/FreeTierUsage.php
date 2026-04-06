<?php

namespace Sunaoka\Aws\Structures\FreeTier\GetFreeTierUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $actualUsageAmount
 * @property string|null $description
 * @property double|null $forecastedUsageAmount
 * @property string|null $freeTierType
 * @property double|null $limit
 * @property string|null $operation
 * @property string|null $region
 * @property string|null $service
 * @property string|null $unit
 * @property string|null $usageType
 */
class FreeTierUsage extends Shape
{
    /**
     * @param array{
     *     actualUsageAmount?: double|null,
     *     description?: string|null,
     *     forecastedUsageAmount?: double|null,
     *     freeTierType?: string|null,
     *     limit?: double|null,
     *     operation?: string|null,
     *     region?: string|null,
     *     service?: string|null,
     *     unit?: string|null,
     *     usageType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
