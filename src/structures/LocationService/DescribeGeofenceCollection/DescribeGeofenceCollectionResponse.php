<?php

namespace Sunaoka\Aws\Structures\LocationService\DescribeGeofenceCollection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $CollectionArn
 * @property string $CollectionName
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property string $Description
 * @property string|null $KmsKeyId
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null $PricingPlan
 * @property string|null $PricingPlanDataSource
 * @property array<string, string>|null $Tags
 * @property \Aws\Api\DateTimeResult $UpdateTime
 */
class DescribeGeofenceCollectionResponse extends Response
{
}
