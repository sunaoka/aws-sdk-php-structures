<?php

namespace Sunaoka\Aws\Structures\LocationService\DescribeTracker;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TrackerName
 * @property string $TrackerArn
 * @property string $Description
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement' $PricingPlan
 * @property string $PricingPlanDataSource
 * @property array<string, string> $Tags
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $UpdateTime
 * @property string $KmsKeyId
 * @property 'TimeBased'|'DistanceBased'|'AccuracyBased' $PositionFiltering
 * @property bool $EventBridgeEnabled
 * @property bool $KmsKeyEnableGeospatialQueries
 */
class DescribeTrackerResponse extends Response
{
}
