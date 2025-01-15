<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetRightsizingRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HourlyOnDemandRate
 * @property string|null $InstanceType
 * @property string|null $Platform
 * @property string|null $Region
 * @property string|null $Sku
 * @property string|null $Memory
 * @property string|null $NetworkPerformance
 * @property string|null $Storage
 * @property string|null $Vcpu
 */
class EC2ResourceDetails extends Shape
{
    /**
     * @param array{
     *     HourlyOnDemandRate?: string|null,
     *     InstanceType?: string|null,
     *     Platform?: string|null,
     *     Region?: string|null,
     *     Sku?: string|null,
     *     Memory?: string|null,
     *     NetworkPerformance?: string|null,
     *     Storage?: string|null,
     *     Vcpu?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
