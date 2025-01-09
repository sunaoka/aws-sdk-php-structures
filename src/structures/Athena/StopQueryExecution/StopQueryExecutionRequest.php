<?php

namespace Sunaoka\Aws\Structures\Athena\StopQueryExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueryExecutionId
 */
class StopQueryExecutionRequest extends Request
{
    /**
     * @param array{QueryExecutionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
