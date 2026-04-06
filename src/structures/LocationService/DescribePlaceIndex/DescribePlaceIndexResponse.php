<?php

namespace Sunaoka\Aws\Structures\LocationService\DescribePlaceIndex;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property string $DataSource
 * @property Shapes\DataSourceConfiguration $DataSourceConfiguration
 * @property string $Description
 * @property string $IndexArn
 * @property string $IndexName
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null $PricingPlan
 * @property array<string, string>|null $Tags
 * @property \Aws\Api\DateTimeResult $UpdateTime
 */
class DescribePlaceIndexResponse extends Response
{
}
