<?php

namespace Sunaoka\Aws\Structures\LocationService\DescribeMap;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $MapName
 * @property string $MapArn
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement' $PricingPlan
 * @property string $DataSource
 * @property Shapes\MapConfiguration $Configuration
 * @property string $Description
 * @property array<string, string> $Tags
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $UpdateTime
 */
class DescribeMapResponse extends Response
{
}
