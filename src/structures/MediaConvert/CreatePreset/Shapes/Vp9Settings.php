<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Bitrate
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED' $FramerateControl
 * @property 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER' $FramerateConversionAlgorithm
 * @property int $FramerateDenominator
 * @property int $FramerateNumerator
 * @property double $GopSize
 * @property int $HrdBufferSize
 * @property int $MaxBitrate
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED' $ParControl
 * @property int $ParDenominator
 * @property int $ParNumerator
 * @property 'MULTI_PASS'|'MULTI_PASS_HQ' $QualityTuningLevel
 * @property 'VBR' $RateControlMode
 */
class Vp9Settings extends Shape
{
    /**
     * @param array{
     *     Bitrate?: int,
     *     FramerateControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED',
     *     FramerateConversionAlgorithm?: 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER',
     *     FramerateDenominator?: int,
     *     FramerateNumerator?: int,
     *     GopSize?: double,
     *     HrdBufferSize?: int,
     *     MaxBitrate?: int,
     *     ParControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED',
     *     ParDenominator?: int,
     *     ParNumerator?: int,
     *     QualityTuningLevel?: 'MULTI_PASS'|'MULTI_PASS_HQ',
     *     RateControlMode?: 'VBR'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
