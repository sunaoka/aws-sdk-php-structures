<?php

namespace Sunaoka\Aws\Structures\LocationService\DescribeTracker;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property string $Description
 * @property bool|null $EventBridgeEnabled
 * @property string|null $KmsKeyId
 * @property 'TimeBased'|'DistanceBased'|'AccuracyBased'|null $PositionFiltering
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null $PricingPlan
 * @property string|null $PricingPlanDataSource
 * @property array<string, string>|null $Tags
 * @property string $TrackerArn
 * @property string $TrackerName
 * @property \Aws\Api\DateTimeResult $UpdateTime
 */
class DescribeTrackerResponse extends Response
{
}
