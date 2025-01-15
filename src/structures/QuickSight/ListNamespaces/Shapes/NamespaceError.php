<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListNamespaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PERMISSION_DENIED'|'INTERNAL_SERVICE_ERROR'|null $Type
 * @property string|null $Message
 */
class NamespaceError extends Shape
{
    /**
     * @param array{
     *     Type?: 'PERMISSION_DENIED'|'INTERNAL_SERVICE_ERROR'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
