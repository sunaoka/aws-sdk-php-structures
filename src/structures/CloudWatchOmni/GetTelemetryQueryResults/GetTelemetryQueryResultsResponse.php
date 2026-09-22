<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetTelemetryQueryResults;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Running'|'Failed'|'Complete'|'Cancelled' $status
 * @property list<array<string, string>>|null $rows
 * @property string|null $nextToken
 * @property Shapes\QueryStatistics|null $statistics
 */
class GetTelemetryQueryResultsResponse extends Response
{
}
