<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\CreatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Codec
 * @property array<string, string>|null $CodecOptions
 * @property string|null $KeyframesMaxDist
 * @property string|null $FixedGOP
 * @property string|null $BitRate
 * @property string|null $FrameRate
 * @property string|null $MaxFrameRate
 * @property string|null $Resolution
 * @property string|null $AspectRatio
 * @property string|null $MaxWidth
 * @property string|null $MaxHeight
 * @property string|null $DisplayAspectRatio
 * @property string|null $SizingPolicy
 * @property string|null $PaddingPolicy
 * @property list<PresetWatermark>|null $Watermarks
 */
class VideoParameters extends Shape
{
    /**
     * @param array{
     *     Codec?: string|null,
     *     CodecOptions?: array<string, string>|null,
     *     KeyframesMaxDist?: string|null,
     *     FixedGOP?: string|null,
     *     BitRate?: string|null,
     *     FrameRate?: string|null,
     *     MaxFrameRate?: string|null,
     *     Resolution?: string|null,
     *     AspectRatio?: string|null,
     *     MaxWidth?: string|null,
     *     MaxHeight?: string|null,
     *     DisplayAspectRatio?: string|null,
     *     SizingPolicy?: string|null,
     *     PaddingPolicy?: string|null,
     *     Watermarks?: list<PresetWatermark>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
