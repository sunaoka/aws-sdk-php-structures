<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 2147483647> $TrackNumber
 */
class TrackSourceSettings extends Shape
{
    /**
     * @param array{TrackNumber?: int<1, 2147483647>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
