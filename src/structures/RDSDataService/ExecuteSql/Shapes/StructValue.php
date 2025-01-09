<?php

namespace Sunaoka\Aws\Structures\RDSDataService\ExecuteSql\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Value> $attributes
 */
class StructValue extends Shape
{
    /**
     * @param array{attributes?: list<Value>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
