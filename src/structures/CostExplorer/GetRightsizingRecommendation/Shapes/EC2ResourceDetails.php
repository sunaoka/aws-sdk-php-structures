<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetRightsizingRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HourlyOnDemandRate
 * @property string $InstanceType
 * @property string $Platform
 * @property string $Region
 * @property string $Sku
 * @property string $Memory
 * @property string $NetworkPerformance
 * @property string $Storage
 * @property string $Vcpu
 */
class EC2ResourceDetails extends Shape
{
    /**
     * @param array{
     *     HourlyOnDemandRate?: string,
     *     InstanceType?: string,
     *     Platform?: string,
     *     Region?: string,
     *     Sku?: string,
     *     Memory?: string,
     *     NetworkPerformance?: string,
     *     Storage?: string,
     *     Vcpu?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
