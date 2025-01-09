<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateFunctionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Active'|'PassThrough' $Mode
 */
class TracingConfig extends Shape
{
    /**
     * @param array{Mode?: 'Active'|'PassThrough'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
