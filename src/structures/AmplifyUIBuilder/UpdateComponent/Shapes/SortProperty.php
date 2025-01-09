<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\UpdateComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $field
 * @property 'ASC'|'DESC' $direction
 */
class SortProperty extends Shape
{
    /**
     * @param array{
     *     field: string,
     *     direction: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
