<?php

namespace Sunaoka\Aws\Structures\DataSync\StartTaskExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SIMPLE_PATTERN' $FilterType
 * @property string $Value
 */
class FilterRule extends Shape
{
    /**
     * @param array{
     *     FilterType?: 'SIMPLE_PATTERN',
     *     Value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
