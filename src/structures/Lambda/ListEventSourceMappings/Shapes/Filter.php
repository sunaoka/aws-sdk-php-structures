<?php

namespace Sunaoka\Aws\Structures\Lambda\ListEventSourceMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Pattern
 */
class Filter extends Shape
{
    /**
     * @param array{Pattern?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
