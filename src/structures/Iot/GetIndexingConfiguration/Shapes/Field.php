<?php

namespace Sunaoka\Aws\Structures\Iot\GetIndexingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property 'Number'|'String'|'Boolean'|null $type
 */
class Field extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     type?: 'Number'|'String'|'Boolean'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
