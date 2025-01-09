<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetQueryResults;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CWLI'|'SQL'|'PPL' $queryLanguage
 * @property list<list<Shapes\ResultField>> $results
 * @property Shapes\QueryStatistics $statistics
 * @property 'Scheduled'|'Running'|'Complete'|'Failed'|'Cancelled'|'Timeout'|'Unknown' $status
 * @property string $encryptionKey
 */
class GetQueryResultsResponse extends Response
{
}
