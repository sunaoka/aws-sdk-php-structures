<?php

namespace Sunaoka\Aws\Structures\LocationService\DescribeMap;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\MapConfiguration $Configuration
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property string $DataSource
 * @property string $Description
 * @property string $MapArn
 * @property string $MapName
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null $PricingPlan
 * @property array<string, string>|null $Tags
 * @property \Aws\Api\DateTimeResult $UpdateTime
 */
class DescribeMapResponse extends Response
{
}
