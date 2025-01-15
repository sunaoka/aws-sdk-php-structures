<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListPresets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BITRATE_CLASS_100'|'BITRATE_CLASS_140'|'BITRATE_CLASS_200'|null $BitrateClass
 * @property 'HIGH'|'HIGH_422'|null $CodecProfile
 * @property 'DISABLED'|'ENABLED'|null $FlickerAdaptiveQuantization
 * @property 'DISABLED'|'ENABLED'|null $GopBReference
 * @property int<0, 2147483647>|null $GopClosedCadence
 * @property int<0, 1152000000>|null $HrdBufferSize
 * @property 'SINGLE_PASS'|'SINGLE_PASS_HQ'|'MULTI_PASS_HQ'|null $QualityTuningLevel
 * @property int<8, 12>|null $Slices
 */
class Xavc4kProfileSettings extends Shape
{
    /**
     * @param array{
     *     BitrateClass?: 'BITRATE_CLASS_100'|'BITRATE_CLASS_140'|'BITRATE_CLASS_200'|null,
     *     CodecProfile?: 'HIGH'|'HIGH_422'|null,
     *     FlickerAdaptiveQuantization?: 'DISABLED'|'ENABLED'|null,
     *     GopBReference?: 'DISABLED'|'ENABLED'|null,
     *     GopClosedCadence?: int<0, 2147483647>|null,
     *     HrdBufferSize?: int<0, 1152000000>|null,
     *     QualityTuningLevel?: 'SINGLE_PASS'|'SINGLE_PASS_HQ'|'MULTI_PASS_HQ'|null,
     *     Slices?: int<8, 12>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
