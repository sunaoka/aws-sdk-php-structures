<?php

namespace Sunaoka\Aws\Structures\LocationService\ListGeofenceCollections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CollectionName
 * @property string $Description
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null $PricingPlan
 * @property string|null $PricingPlanDataSource
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $UpdateTime
 */
class ListGeofenceCollectionsResponseEntry extends Shape
{
    /**
     * @param array{
     *     CollectionName: string,
     *     Description: string,
     *     PricingPlan?: 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null,
     *     PricingPlanDataSource?: string|null,
     *     CreateTime: \Aws\Api\DateTimeResult,
     *     UpdateTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
