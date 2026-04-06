<?php

namespace Sunaoka\Aws\Structures\LocationService\DescribeGeofenceCollection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $CollectionName
 * @property string $CollectionArn
 * @property string $Description
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null $PricingPlan
 * @property string|null $PricingPlanDataSource
 * @property string|null $KmsKeyId
 * @property array<string, string>|null $Tags
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $UpdateTime
 * @property int<0, max>|null $GeofenceCount
 */
class DescribeGeofenceCollectionResponse extends Response
{
}
