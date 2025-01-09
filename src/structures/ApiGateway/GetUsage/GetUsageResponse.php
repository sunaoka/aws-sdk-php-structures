<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetUsage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $usagePlanId
 * @property string $startDate
 * @property string $endDate
 * @property string $position
 * @property array<string, list<list<int>>> $items
 */
class GetUsageResponse extends Response
{
}
