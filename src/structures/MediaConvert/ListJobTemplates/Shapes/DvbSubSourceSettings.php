<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Pid
 */
class DvbSubSourceSettings extends Shape
{
    /**
     * @param array{Pid?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
