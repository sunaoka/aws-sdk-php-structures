<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ListOpenCypherQueries;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int|null $acceptedQueryCount
 * @property int|null $runningQueryCount
 * @property list<Shapes\GremlinQueryStatus>|null $queries
 */
class ListOpenCypherQueriesResponse extends Response
{
}
