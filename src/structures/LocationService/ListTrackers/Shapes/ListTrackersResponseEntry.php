<?php

namespace Sunaoka\Aws\Structures\LocationService\ListTrackers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property string $Description
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null $PricingPlan
 * @property string|null $PricingPlanDataSource
 * @property string $TrackerName
 * @property \Aws\Api\DateTimeResult $UpdateTime
 */
class ListTrackersResponseEntry extends Shape
{
    /**
     * @param array{
     *     CreateTime: \Aws\Api\DateTimeResult,
     *     Description: string,
     *     PricingPlan?: 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null,
     *     PricingPlanDataSource?: string|null,
     *     TrackerName: string,
     *     UpdateTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
