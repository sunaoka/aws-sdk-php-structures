<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ListJobsByStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Width
 * @property int|null $Height
 * @property string|null $FrameRate
 * @property int|null $FileSize
 * @property int|null $DurationMillis
 */
class DetectedProperties extends Shape
{
    /**
     * @param array{
     *     Width?: int|null,
     *     Height?: int|null,
     *     FrameRate?: string|null,
     *     FileSize?: int|null,
     *     DurationMillis?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
