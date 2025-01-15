<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetQueryResults;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CWLI'|'SQL'|'PPL'|null $queryLanguage
 * @property list<list<Shapes\ResultField>>|null $results
 * @property Shapes\QueryStatistics|null $statistics
 * @property 'Scheduled'|'Running'|'Complete'|'Failed'|'Cancelled'|'Timeout'|'Unknown'|null $status
 * @property string|null $encryptionKey
 */
class GetQueryResultsResponse extends Response
{
}
