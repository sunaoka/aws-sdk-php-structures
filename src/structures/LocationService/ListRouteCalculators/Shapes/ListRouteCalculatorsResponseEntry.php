<?php

namespace Sunaoka\Aws\Structures\LocationService\ListRouteCalculators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CalculatorName
 * @property string $Description
 * @property string $DataSource
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement' $PricingPlan
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $UpdateTime
 */
class ListRouteCalculatorsResponseEntry extends Shape
{
    /**
     * @param array{
     *     CalculatorName: string,
     *     Description: string,
     *     DataSource: string,
     *     PricingPlan?: 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement',
     *     CreateTime: \Aws\Api\DateTimeResult,
     *     UpdateTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
