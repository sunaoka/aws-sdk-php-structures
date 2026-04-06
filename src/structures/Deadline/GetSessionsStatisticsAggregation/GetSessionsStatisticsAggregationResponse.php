<?php

namespace Sunaoka\Aws\Structures\Deadline\GetSessionsStatisticsAggregation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $nextToken
 * @property list<Shapes\Statistics>|null $statistics
 * @property 'IN_PROGRESS'|'TIMEOUT'|'FAILED'|'COMPLETED' $status
 * @property string|null $statusMessage
 */
class GetSessionsStatisticsAggregationResponse extends Response
{
}
