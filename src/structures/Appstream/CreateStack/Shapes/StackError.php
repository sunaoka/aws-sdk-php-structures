<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STORAGE_CONNECTOR_ERROR'|'INTERNAL_SERVICE_ERROR'|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class StackError extends Shape
{
    /**
     * @param array{
     *     ErrorCode?: 'STORAGE_CONNECTOR_ERROR'|'INTERNAL_SERVICE_ERROR'|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
