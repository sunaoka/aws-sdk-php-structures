<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BITRATE_CLASS_100'|'BITRATE_CLASS_140'|'BITRATE_CLASS_200' $BitrateClass
 * @property 'HIGH'|'HIGH_422' $CodecProfile
 * @property 'DISABLED'|'ENABLED' $FlickerAdaptiveQuantization
 * @property 'DISABLED'|'ENABLED' $GopBReference
 * @property int $GopClosedCadence
 * @property int $HrdBufferSize
 * @property 'SINGLE_PASS'|'SINGLE_PASS_HQ'|'MULTI_PASS_HQ' $QualityTuningLevel
 * @property int $Slices
 */
class Xavc4kProfileSettings extends Shape
{
    /**
     * @param array{
     *     BitrateClass?: 'BITRATE_CLASS_100'|'BITRATE_CLASS_140'|'BITRATE_CLASS_200',
     *     CodecProfile?: 'HIGH'|'HIGH_422',
     *     FlickerAdaptiveQuantization?: 'DISABLED'|'ENABLED',
     *     GopBReference?: 'DISABLED'|'ENABLED',
     *     GopClosedCadence?: int,
     *     HrdBufferSize?: int,
     *     QualityTuningLevel?: 'SINGLE_PASS'|'SINGLE_PASS_HQ'|'MULTI_PASS_HQ',
     *     Slices?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
