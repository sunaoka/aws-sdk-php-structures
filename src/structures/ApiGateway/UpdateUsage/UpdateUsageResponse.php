<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateUsage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $usagePlanId
 * @property string $startDate
 * @property string $endDate
 * @property string $position
 * @property array<string, list<list<int>>> $items
 */
class UpdateUsageResponse extends Response
{
}
