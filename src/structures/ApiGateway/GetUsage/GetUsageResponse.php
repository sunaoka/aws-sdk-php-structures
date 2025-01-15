<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetUsage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $usagePlanId
 * @property string|null $startDate
 * @property string|null $endDate
 * @property string|null $position
 * @property array<string, list<list<int>>>|null $items
 */
class GetUsageResponse extends Response
{
}
