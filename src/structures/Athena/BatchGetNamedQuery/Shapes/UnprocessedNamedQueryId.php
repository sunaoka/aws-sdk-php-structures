<?php

namespace Sunaoka\Aws\Structures\Athena\BatchGetNamedQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NamedQueryId
 * @property string $ErrorCode
 * @property string $ErrorMessage
 */
class UnprocessedNamedQueryId extends Shape
{
    /**
     * @param array{
     *     NamedQueryId?: string,
     *     ErrorCode?: string,
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
