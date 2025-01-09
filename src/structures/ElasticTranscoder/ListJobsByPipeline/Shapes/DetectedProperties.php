<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ListJobsByPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Width
 * @property int $Height
 * @property string $FrameRate
 * @property int $FileSize
 * @property int $DurationMillis
 */
class DetectedProperties extends Shape
{
    /**
     * @param array{
     *     Width?: int,
     *     Height?: int,
     *     FrameRate?: string,
     *     FileSize?: int,
     *     DurationMillis?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
