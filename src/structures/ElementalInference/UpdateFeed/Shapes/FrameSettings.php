<?php

namespace Sunaoka\Aws\Structures\ElementalInference\UpdateFeed\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FrameSamplingStrategy $frameSampling
 * @property FrameSize|null $frameSize
 */
class FrameSettings extends Shape
{
    /**
     * @param array{
     *     frameSampling: FrameSamplingStrategy,
     *     frameSize?: FrameSize|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
