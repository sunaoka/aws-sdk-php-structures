<?php

namespace Sunaoka\Aws\Structures\Athena\BatchGetPreparedStatement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StatementName
 * @property string $ErrorCode
 * @property string $ErrorMessage
 */
class UnprocessedPreparedStatementName extends Shape
{
    /**
     * @param array{
     *     StatementName?: string,
     *     ErrorCode?: string,
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
