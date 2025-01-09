<?php

namespace Sunaoka\Aws\Structures\Athena\BatchGetQueryExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QueryExecutionId
 * @property string $ErrorCode
 * @property string $ErrorMessage
 */
class UnprocessedQueryExecutionId extends Shape
{
    /**
     * @param array{
     *     QueryExecutionId?: string,
     *     ErrorCode?: string,
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
