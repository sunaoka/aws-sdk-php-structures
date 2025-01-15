<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BITRATE_CLASS_25'|'BITRATE_CLASS_35'|'BITRATE_CLASS_50'|null $BitrateClass
 * @property 'DISABLED'|'ENABLED'|null $FlickerAdaptiveQuantization
 * @property 'DISABLED'|'ENABLED'|null $GopBReference
 * @property int<0, 2147483647>|null $GopClosedCadence
 * @property int<0, 1152000000>|null $HrdBufferSize
 * @property 'PROGRESSIVE'|'TOP_FIELD'|'BOTTOM_FIELD'|'FOLLOW_TOP_FIELD'|'FOLLOW_BOTTOM_FIELD'|null $InterlaceMode
 * @property 'SINGLE_PASS'|'SINGLE_PASS_HQ'|'MULTI_PASS_HQ'|null $QualityTuningLevel
 * @property int<4, 12>|null $Slices
 * @property 'NONE'|'HARD'|null $Telecine
 */
class XavcHdProfileSettings extends Shape
{
    /**
     * @param array{
     *     BitrateClass?: 'BITRATE_CLASS_25'|'BITRATE_CLASS_35'|'BITRATE_CLASS_50'|null,
     *     FlickerAdaptiveQuantization?: 'DISABLED'|'ENABLED'|null,
     *     GopBReference?: 'DISABLED'|'ENABLED'|null,
     *     GopClosedCadence?: int<0, 2147483647>|null,
     *     HrdBufferSize?: int<0, 1152000000>|null,
     *     InterlaceMode?: 'PROGRESSIVE'|'TOP_FIELD'|'BOTTOM_FIELD'|'FOLLOW_TOP_FIELD'|'FOLLOW_BOTTOM_FIELD'|null,
     *     QualityTuningLevel?: 'SINGLE_PASS'|'SINGLE_PASS_HQ'|'MULTI_PASS_HQ'|null,
     *     Slices?: int<4, 12>|null,
     *     Telecine?: 'NONE'|'HARD'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
