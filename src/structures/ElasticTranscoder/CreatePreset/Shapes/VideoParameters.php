<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\CreatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Codec
 * @property array<string, string> $CodecOptions
 * @property string $KeyframesMaxDist
 * @property string $FixedGOP
 * @property string $BitRate
 * @property string $FrameRate
 * @property string $MaxFrameRate
 * @property string $Resolution
 * @property string $AspectRatio
 * @property string $MaxWidth
 * @property string $MaxHeight
 * @property string $DisplayAspectRatio
 * @property string $SizingPolicy
 * @property string $PaddingPolicy
 * @property list<PresetWatermark> $Watermarks
 */
class VideoParameters extends Shape
{
    /**
     * @param array{
     *     Codec?: string,
     *     CodecOptions?: array<string, string>,
     *     KeyframesMaxDist?: string,
     *     FixedGOP?: string,
     *     BitRate?: string,
     *     FrameRate?: string,
     *     MaxFrameRate?: string,
     *     Resolution?: string,
     *     AspectRatio?: string,
     *     MaxWidth?: string,
     *     MaxHeight?: string,
     *     DisplayAspectRatio?: string,
     *     SizingPolicy?: string,
     *     PaddingPolicy?: string,
     *     Watermarks?: list<PresetWatermark>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
