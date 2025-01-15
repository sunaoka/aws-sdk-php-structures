<?php

namespace Sunaoka\Aws\Structures\Athena\BatchGetQueryExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $QueryExecutionId
 * @property string|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class UnprocessedQueryExecutionId extends Shape
{
    /**
     * @param array{
     *     QueryExecutionId?: string|null,
     *     ErrorCode?: string|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
