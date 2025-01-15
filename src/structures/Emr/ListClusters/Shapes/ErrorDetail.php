<?php

namespace Sunaoka\Aws\Structures\Emr\ListClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ErrorCode
 * @property list<array<string, string>>|null $ErrorData
 * @property string|null $ErrorMessage
 */
class ErrorDetail extends Shape
{
    /**
     * @param array{
     *     ErrorCode?: string|null,
     *     ErrorData?: list<array<string, string>>|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
