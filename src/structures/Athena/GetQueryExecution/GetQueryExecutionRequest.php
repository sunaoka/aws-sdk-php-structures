<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueryExecutionId
 */
class GetQueryExecutionRequest extends Request
{
    /**
     * @param array{QueryExecutionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
