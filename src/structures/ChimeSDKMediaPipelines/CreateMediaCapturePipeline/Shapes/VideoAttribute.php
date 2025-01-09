<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaCapturePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $CornerRadius
 * @property 'Black'|'Blue'|'Red'|'Green'|'White'|'Yellow' $BorderColor
 * @property 'Black'|'Blue'|'Red'|'Green'|'White'|'Yellow' $HighlightColor
 * @property int $BorderThickness
 */
class VideoAttribute extends Shape
{
    /**
     * @param array{
     *     CornerRadius?: int,
     *     BorderColor?: 'Black'|'Blue'|'Red'|'Green'|'White'|'Yellow',
     *     HighlightColor?: 'Black'|'Blue'|'Red'|'Green'|'White'|'Yellow',
     *     BorderThickness?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
