<?php

namespace Sunaoka\Aws\Structures\Lambda\GetFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Active'|'PassThrough' $Mode
 */
class TracingConfigResponse extends Shape
{
    /**
     * @param array{Mode?: 'Active'|'PassThrough'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
