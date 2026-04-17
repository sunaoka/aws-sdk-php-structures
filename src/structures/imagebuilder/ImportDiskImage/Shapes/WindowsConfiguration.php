<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ImportDiskImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 4294967295> $imageIndex
 */
class WindowsConfiguration extends Shape
{
    /**
     * @param array{imageIndex: int<1, 4294967295>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
