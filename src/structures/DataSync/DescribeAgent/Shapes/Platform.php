<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Version
 */
class Platform extends Shape
{
    /**
     * @param array{Version?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
