<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\CreatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $MaxWidth
 * @property string|null $MaxHeight
 * @property string|null $SizingPolicy
 * @property string|null $HorizontalAlign
 * @property string|null $HorizontalOffset
 * @property string|null $VerticalAlign
 * @property string|null $VerticalOffset
 * @property string|null $Opacity
 * @property string|null $Target
 */
class PresetWatermark extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     MaxWidth?: string|null,
     *     MaxHeight?: string|null,
     *     SizingPolicy?: string|null,
     *     HorizontalAlign?: string|null,
     *     HorizontalOffset?: string|null,
     *     VerticalAlign?: string|null,
     *     VerticalOffset?: string|null,
     *     Opacity?: string|null,
     *     Target?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
