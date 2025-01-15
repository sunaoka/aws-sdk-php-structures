<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListPresets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1000, 30000>|null $TdtInterval
 */
class DvbTdtSettings extends Shape
{
    /**
     * @param array{TdtInterval?: int<1000, 30000>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
