<?php

namespace Sunaoka\Aws\Structures\Athena\BatchGetPreparedStatement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StatementName
 * @property string|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class UnprocessedPreparedStatementName extends Shape
{
    /**
     * @param array{
     *     StatementName?: string|null,
     *     ErrorCode?: string|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
