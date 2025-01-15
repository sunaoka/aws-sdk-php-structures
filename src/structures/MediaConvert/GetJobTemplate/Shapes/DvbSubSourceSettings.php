<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 2147483647>|null $Pid
 */
class DvbSubSourceSettings extends Shape
{
    /**
     * @param array{Pid?: int<1, 2147483647>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
