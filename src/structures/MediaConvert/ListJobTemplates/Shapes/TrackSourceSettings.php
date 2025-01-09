<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TrackNumber
 */
class TrackSourceSettings extends Shape
{
    /**
     * @param array{TrackNumber?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
