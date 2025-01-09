<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1000, 1152000000> $Bitrate
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED' $FramerateControl
 * @property 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER' $FramerateConversionAlgorithm
 * @property int<1, 2147483647> $FramerateDenominator
 * @property int<1, 2147483647> $FramerateNumerator
 * @property double $GopSize
 * @property int<0, 47185920> $HrdBufferSize
 * @property int<1000, 1152000000> $MaxBitrate
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED' $ParControl
 * @property int<1, 2147483647> $ParDenominator
 * @property int<1, 2147483647> $ParNumerator
 * @property 'MULTI_PASS'|'MULTI_PASS_HQ' $QualityTuningLevel
 * @property 'VBR' $RateControlMode
 */
class Vp8Settings extends Shape
{
    /**
     * @param array{
     *     Bitrate?: int<1000, 1152000000>,
     *     FramerateControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED',
     *     FramerateConversionAlgorithm?: 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER',
     *     FramerateDenominator?: int<1, 2147483647>,
     *     FramerateNumerator?: int<1, 2147483647>,
     *     GopSize?: double,
     *     HrdBufferSize?: int<0, 47185920>,
     *     MaxBitrate?: int<1000, 1152000000>,
     *     ParControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED',
     *     ParDenominator?: int<1, 2147483647>,
     *     ParNumerator?: int<1, 2147483647>,
     *     QualityTuningLevel?: 'MULTI_PASS'|'MULTI_PASS_HQ',
     *     RateControlMode?: 'VBR'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
