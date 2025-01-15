<?php

namespace Sunaoka\Aws\Structures\Athena\BatchGetQueryExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\QueryExecution>|null $QueryExecutions
 * @property list<Shapes\UnprocessedQueryExecutionId>|null $UnprocessedQueryExecutionIds
 */
class BatchGetQueryExecutionResponse extends Response
{
}
