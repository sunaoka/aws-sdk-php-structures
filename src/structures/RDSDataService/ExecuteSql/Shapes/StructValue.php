<?php

namespace Sunaoka\Aws\Structures\RDSDataService\ExecuteSql\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Value>|null $attributes
 */
class StructValue extends Shape
{
    /**
     * @param array{attributes?: list<Value>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
