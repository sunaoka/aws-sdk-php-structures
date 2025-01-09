<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 2147483647> $Pid
 */
class DvbSubSourceSettings extends Shape
{
    /**
     * @param array{Pid?: int<1, 2147483647>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
