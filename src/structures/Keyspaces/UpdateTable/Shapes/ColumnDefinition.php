<?php

namespace Sunaoka\Aws\Structures\Keyspaces\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $type
 */
class ColumnDefinition extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
