<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1000, 30000> $TdtInterval
 */
class DvbTdtSettings extends Shape
{
    /**
     * @param array{TdtInterval?: int<1000, 30000>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
