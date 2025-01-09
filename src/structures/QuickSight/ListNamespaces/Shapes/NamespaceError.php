<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListNamespaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PERMISSION_DENIED'|'INTERNAL_SERVICE_ERROR' $Type
 * @property string $Message
 */
class NamespaceError extends Shape
{
    /**
     * @param array{
     *     Type?: 'PERMISSION_DENIED'|'INTERNAL_SERVICE_ERROR',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
