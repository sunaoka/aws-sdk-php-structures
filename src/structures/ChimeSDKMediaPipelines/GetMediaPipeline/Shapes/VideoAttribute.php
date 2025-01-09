<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 20> $CornerRadius
 * @property 'Black'|'Blue'|'Red'|'Green'|'White'|'Yellow' $BorderColor
 * @property 'Black'|'Blue'|'Red'|'Green'|'White'|'Yellow' $HighlightColor
 * @property int<1, 20> $BorderThickness
 */
class VideoAttribute extends Shape
{
    /**
     * @param array{
     *     CornerRadius?: int<1, 20>,
     *     BorderColor?: 'Black'|'Blue'|'Red'|'Green'|'White'|'Yellow',
     *     HighlightColor?: 'Black'|'Blue'|'Red'|'Green'|'White'|'Yellow',
     *     BorderThickness?: int<1, 20>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
