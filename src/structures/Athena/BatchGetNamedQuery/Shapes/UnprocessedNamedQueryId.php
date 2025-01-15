<?php

namespace Sunaoka\Aws\Structures\Athena\BatchGetNamedQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NamedQueryId
 * @property string|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class UnprocessedNamedQueryId extends Shape
{
    /**
     * @param array{
     *     NamedQueryId?: string|null,
     *     ErrorCode?: string|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
