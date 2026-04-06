<?php

namespace Sunaoka\Aws\Structures\LocationService\ListTrackers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TrackerName
 * @property string $Description
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null $PricingPlan
 * @property string|null $PricingPlanDataSource
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $UpdateTime
 */
class ListTrackersResponseEntry extends Shape
{
    /**
     * @param array{
     *     TrackerName: string,
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
