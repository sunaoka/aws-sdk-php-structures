<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQUALS' $comparison
 * @property string $key
 * @property string|null $value
 */
class MapFilter extends Shape
{
    /**
     * @param array{
     *     comparison: 'EQUALS',
     *     key: string,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
