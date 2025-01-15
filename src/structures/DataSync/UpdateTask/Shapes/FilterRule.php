<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SIMPLE_PATTERN'|null $FilterType
 * @property string|null $Value
 */
class FilterRule extends Shape
{
    /**
     * @param array{
     *     FilterType?: 'SIMPLE_PATTERN'|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
