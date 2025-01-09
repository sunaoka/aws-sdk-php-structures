<?php

namespace Sunaoka\Aws\Structures\LocationService\DescribeGeofenceCollection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $CollectionName
 * @property string $CollectionArn
 * @property string $Description
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement' $PricingPlan
 * @property string $PricingPlanDataSource
 * @property string $KmsKeyId
 * @property array<string, string> $Tags
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $UpdateTime
 * @property int<0, max> $GeofenceCount
 */
class DescribeGeofenceCollectionResponse extends Response
{
}
