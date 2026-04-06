<?php

namespace Sunaoka\Aws\Structures\LocationService\ListMaps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property string $DataSource
 * @property string $Description
 * @property string $MapName
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null $PricingPlan
 * @property \Aws\Api\DateTimeResult $UpdateTime
 */
class ListMapsResponseEntry extends Shape
{
    /**
     * @param array{
     *     CreateTime: \Aws\Api\DateTimeResult,
     *     DataSource: string,
     *     Description: string,
     *     MapName: string,
     *     PricingPlan?: 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null,
     *     UpdateTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
