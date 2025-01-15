<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateResourceProfileDetections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property 'CUSTOM'|'MANAGED'|null $type
 */
class SuppressDataIdentifier extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     type?: 'CUSTOM'|'MANAGED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
