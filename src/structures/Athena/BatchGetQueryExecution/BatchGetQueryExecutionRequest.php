<?php

namespace Sunaoka\Aws\Structures\Athena\BatchGetQueryExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $QueryExecutionIds
 */
class BatchGetQueryExecutionRequest extends Request
{
    /**
     * @param array{QueryExecutionIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
