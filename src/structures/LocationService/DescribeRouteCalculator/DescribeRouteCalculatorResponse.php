<?php

namespace Sunaoka\Aws\Structures\LocationService\DescribeRouteCalculator;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $CalculatorArn
 * @property string $CalculatorName
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property string $DataSource
 * @property string $Description
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null $PricingPlan
 * @property array<string, string>|null $Tags
 * @property \Aws\Api\DateTimeResult $UpdateTime
 */
class DescribeRouteCalculatorResponse extends Response
{
}
