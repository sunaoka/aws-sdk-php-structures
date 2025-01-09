<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $HeightInPx
 * @property int $WidthInPx
 */
class VideoDetail extends Shape
{
    /**
     * @param array{
     *     HeightInPx?: int,
     *     WidthInPx?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
