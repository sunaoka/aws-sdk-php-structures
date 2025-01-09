<?php

namespace Sunaoka\Aws\Structures\Deadline\GetSessionsStatisticsAggregation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Statistics> $statistics
 * @property string $nextToken
 * @property 'IN_PROGRESS'|'TIMEOUT'|'FAILED'|'COMPLETED' $status
 * @property string $statusMessage
 */
class GetSessionsStatisticsAggregationResponse extends Response
{
}
