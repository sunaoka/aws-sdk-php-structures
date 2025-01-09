<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ListOpenCypherQueries;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $acceptedQueryCount
 * @property int $runningQueryCount
 * @property list<Shapes\GremlinQueryStatus> $queries
 */
class ListOpenCypherQueriesResponse extends Response
{
}
