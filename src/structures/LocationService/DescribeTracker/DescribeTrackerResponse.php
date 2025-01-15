<?php

namespace Sunaoka\Aws\Structures\LocationService\DescribeTracker;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TrackerName
 * @property string $TrackerArn
 * @property string $Description
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null $PricingPlan
 * @property string|null $PricingPlanDataSource
 * @property array<string, string>|null $Tags
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $UpdateTime
 * @property string|null $KmsKeyId
 * @property 'TimeBased'|'DistanceBased'|'AccuracyBased'|null $PositionFiltering
 * @property bool|null $EventBridgeEnabled
 * @property bool|null $KmsKeyEnableGeospatialQueries
 */
class DescribeTrackerResponse extends Response
{
}
