<?php

namespace Sunaoka\Aws\Structures\Athena\ListPreparedStatements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StatementName
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class PreparedStatementSummary extends Shape
{
    /**
     * @param array{
     *     StatementName?: string,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
