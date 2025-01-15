<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetLayout\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BasicLayout|null $basic
 */
class LayoutContent extends Shape
{
    /**
     * @param array{basic?: BasicLayout|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
