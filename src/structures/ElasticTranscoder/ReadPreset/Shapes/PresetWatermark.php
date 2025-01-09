<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ReadPreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $MaxWidth
 * @property string $MaxHeight
 * @property string $SizingPolicy
 * @property string $HorizontalAlign
 * @property string $HorizontalOffset
 * @property string $VerticalAlign
 * @property string $VerticalOffset
 * @property string $Opacity
 * @property string $Target
 */
class PresetWatermark extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     MaxWidth?: string,
     *     MaxHeight?: string,
     *     SizingPolicy?: string,
     *     HorizontalAlign?: string,
     *     HorizontalOffset?: string,
     *     VerticalAlign?: string,
     *     VerticalOffset?: string,
     *     Opacity?: string,
     *     Target?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
