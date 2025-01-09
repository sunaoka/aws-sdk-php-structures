<?php

namespace Sunaoka\Aws\Structures\LocationService\ListMaps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MapName
 * @property string $Description
 * @property string $DataSource
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement' $PricingPlan
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $UpdateTime
 */
class ListMapsResponseEntry extends Shape
{
    /**
     * @param array{
     *     MapName: string,
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
