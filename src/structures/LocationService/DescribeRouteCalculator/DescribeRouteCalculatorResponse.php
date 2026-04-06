<?php

namespace Sunaoka\Aws\Structures\LocationService\DescribeRouteCalculator;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $CalculatorName
 * @property string $CalculatorArn
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null $PricingPlan
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $UpdateTime
 * @property string $DataSource
 * @property array<string, string>|null $Tags
 */
class DescribeRouteCalculatorResponse extends Response
{
}
