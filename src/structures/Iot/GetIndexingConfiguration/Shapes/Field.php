<?php

namespace Sunaoka\Aws\Structures\Iot\GetIndexingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'Number'|'String'|'Boolean' $type
 */
class Field extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     type?: 'Number'|'String'|'Boolean'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
