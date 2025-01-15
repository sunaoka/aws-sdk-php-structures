<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaCapturePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 20>|null $CornerRadius
 * @property 'Black'|'Blue'|'Red'|'Green'|'White'|'Yellow'|null $BorderColor
 * @property 'Black'|'Blue'|'Red'|'Green'|'White'|'Yellow'|null $HighlightColor
 * @property int<1, 20>|null $BorderThickness
 */
class VideoAttribute extends Shape
{
    /**
     * @param array{
     *     CornerRadius?: int<1, 20>|null,
     *     BorderColor?: 'Black'|'Blue'|'Red'|'Green'|'White'|'Yellow'|null,
     *     HighlightColor?: 'Black'|'Blue'|'Red'|'Green'|'White'|'Yellow'|null,
     *     BorderThickness?: int<1, 20>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
