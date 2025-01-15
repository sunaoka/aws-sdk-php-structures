<?php

namespace Sunaoka\Aws\Structures\Athena\ListPreparedStatements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StatementName
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class PreparedStatementSummary extends Shape
{
    /**
     * @param array{
     *     StatementName?: string|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
