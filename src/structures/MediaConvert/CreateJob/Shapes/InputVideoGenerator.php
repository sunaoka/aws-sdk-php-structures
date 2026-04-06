<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<50, 86400000>|null $Duration
 */
class InputVideoGenerator extends Shape
{
    /**
     * @param array{Duration?: int<50, 86400000>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
