<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateResourceProfileDetections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property 'CUSTOM'|'MANAGED' $type
 */
class SuppressDataIdentifier extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     type?: 'CUSTOM'|'MANAGED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
