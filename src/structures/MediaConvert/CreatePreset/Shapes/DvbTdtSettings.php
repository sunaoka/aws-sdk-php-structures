<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TdtInterval
 */
class DvbTdtSettings extends Shape
{
    /**
     * @param array{TdtInterval?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
