<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 2147483647>|null $StreamNumber
 * @property int<1, 2147483647>|null $TrackNumber
 */
class TrackSourceSettings extends Shape
{
    /**
     * @param array{
     *     StreamNumber?: int<1, 2147483647>|null,
     *     TrackNumber?: int<1, 2147483647>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
