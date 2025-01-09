<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetPreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OFF'|'LOW'|'MEDIUM'|'HIGH'|'HIGHER'|'MAX' $AdaptiveQuantization
 * @property 'BIT_8'|'BIT_10' $BitDepth
 * @property 'DISABLED'|'ENABLED' $FilmGrainSynthesis
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED' $FramerateControl
 * @property 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER' $FramerateConversionAlgorithm
 * @property int<1, 2147483647> $FramerateDenominator
 * @property int<1, 2147483647> $FramerateNumerator
 * @property double $GopSize
 * @property int<1000, 1152000000> $MaxBitrate
 * @property int<0, 15> $NumberBFramesBetweenReferenceFrames
 * @property Av1QvbrSettings $QvbrSettings
 * @property 'QVBR' $RateControlMode
 * @property int<1, 32> $Slices
 * @property 'DISABLED'|'ENABLED' $SpatialAdaptiveQuantization
 */
class Av1Settings extends Shape
{
    /**
     * @param array{
     *     AdaptiveQuantization?: 'OFF'|'LOW'|'MEDIUM'|'HIGH'|'HIGHER'|'MAX',
     *     BitDepth?: 'BIT_8'|'BIT_10',
     *     FilmGrainSynthesis?: 'DISABLED'|'ENABLED',
     *     FramerateControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED',
     *     FramerateConversionAlgorithm?: 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER',
     *     FramerateDenominator?: int<1, 2147483647>,
     *     FramerateNumerator?: int<1, 2147483647>,
     *     GopSize?: double,
     *     MaxBitrate?: int<1000, 1152000000>,
     *     NumberBFramesBetweenReferenceFrames?: int<0, 15>,
     *     QvbrSettings?: Av1QvbrSettings,
     *     RateControlMode?: 'QVBR',
     *     Slices?: int<1, 32>,
     *     SpatialAdaptiveQuantization?: 'DISABLED'|'ENABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
