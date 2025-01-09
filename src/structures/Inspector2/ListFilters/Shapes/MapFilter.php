<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFilters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQUALS' $comparison
 * @property string $key
 * @property string $value
 */
class MapFilter extends Shape
{
    /**
     * @param array{
     *     comparison: 'EQUALS',
     *     key: string,
     *     value?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
