<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ListGremlinQueries;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $acceptedQueryCount
 * @property int $runningQueryCount
 * @property list<Shapes\GremlinQueryStatus> $queries
 */
class ListGremlinQueriesResponse extends Response
{
}
