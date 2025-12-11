<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobsQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $HeightInPx
 * @property int|null $WidthInPx
 */
class VideoDetail extends Shape
{
    /**
     * @param array{
     *     HeightInPx?: int|null,
     *     WidthInPx?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
