<?php

namespace Sunaoka\Aws\Structures\MediaConvert\Probe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $MaxContentLightLevel
 * @property int|null $MaxFrameAverageLightLevel
 */
class ContentLightLevel extends Shape
{
    /**
     * @param array{
     *     MaxContentLightLevel?: int|null,
     *     MaxFrameAverageLightLevel?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
