<?php

namespace Sunaoka\Aws\Structures\LocationService\ListGeofenceCollections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CollectionName
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property string $Description
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null $PricingPlan
 * @property string|null $PricingPlanDataSource
 * @property \Aws\Api\DateTimeResult $UpdateTime
 */
class ListGeofenceCollectionsResponseEntry extends Shape
{
    /**
     * @param array{
     *     CollectionName: string,
     *     CreateTime: \Aws\Api\DateTimeResult,
     *     Description: string,
     *     PricingPlan?: 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null,
     *     PricingPlanDataSource?: string|null,
     *     UpdateTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
