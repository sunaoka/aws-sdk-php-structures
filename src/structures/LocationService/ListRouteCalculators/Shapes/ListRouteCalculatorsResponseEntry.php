<?php

namespace Sunaoka\Aws\Structures\LocationService\ListRouteCalculators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CalculatorName
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property string $DataSource
 * @property string $Description
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null $PricingPlan
 * @property \Aws\Api\DateTimeResult $UpdateTime
 */
class ListRouteCalculatorsResponseEntry extends Shape
{
    /**
     * @param array{
     *     CalculatorName: string,
     *     CreateTime: \Aws\Api\DateTimeResult,
     *     DataSource: string,
     *     Description: string,
     *     PricingPlan?: 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null,
     *     UpdateTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
