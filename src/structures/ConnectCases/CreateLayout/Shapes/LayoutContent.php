<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateLayout\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BasicLayout $basic
 */
class LayoutContent extends Shape
{
    /**
     * @param array{basic?: BasicLayout} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
