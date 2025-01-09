<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetQueryResults;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'QUEUED'|'RUNNING'|'FINISHED'|'FAILED'|'CANCELLED'|'TIMED_OUT' $QueryStatus
 * @property Shapes\QueryStatistics $QueryStatistics
 * @property list<list<array<string, string>>> $QueryResultRows
 * @property string $NextToken
 * @property string $ErrorMessage
 */
class GetQueryResultsResponse extends Response
{
}
