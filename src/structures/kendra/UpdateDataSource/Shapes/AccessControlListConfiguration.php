<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeyPath
 */
class AccessControlListConfiguration extends Shape
{
    /**
     * @param array{KeyPath?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
