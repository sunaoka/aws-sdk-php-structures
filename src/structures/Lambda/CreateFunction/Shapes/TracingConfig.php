<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Active'|'PassThrough'|null $Mode
 */
class TracingConfig extends Shape
{
    /**
     * @param array{Mode?: 'Active'|'PassThrough'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
