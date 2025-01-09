<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\EnableProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $specifier
 */
class MappingRule extends Shape
{
    /**
     * @param array{specifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
