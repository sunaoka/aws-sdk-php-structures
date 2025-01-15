<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetQueryResults;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'QUEUED'|'RUNNING'|'FINISHED'|'FAILED'|'CANCELLED'|'TIMED_OUT'|null $QueryStatus
 * @property Shapes\QueryStatistics|null $QueryStatistics
 * @property list<list<array<string, string>>>|null $QueryResultRows
 * @property string|null $NextToken
 * @property string|null $ErrorMessage
 */
class GetQueryResultsResponse extends Response
{
}
