<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetPreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OFF'|'LOW'|'MEDIUM'|'HIGH'|'HIGHER'|'MAX' $AdaptiveQuantization
 * @property 'BIT_8'|'BIT_10' $BitDepth
 * @property 'DISABLED'|'ENABLED' $FilmGrainSynthesis
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED' $FramerateControl
 * @property 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER' $FramerateConversionAlgorithm
 * @property int $FramerateDenominator
 * @property int $FramerateNumerator
 * @property double $GopSize
 * @property int $MaxBitrate
 * @property int $NumberBFramesBetweenReferenceFrames
 * @property Av1QvbrSettings $QvbrSettings
 * @property 'QVBR' $RateControlMode
 * @property int $Slices
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
     *     FramerateDenominator?: int,
     *     FramerateNumerator?: int,
     *     GopSize?: double,
     *     MaxBitrate?: int,
     *     NumberBFramesBetweenReferenceFrames?: int,
     *     QvbrSettings?: Av1QvbrSettings,
     *     RateControlMode?: 'QVBR',
     *     Slices?: int,
     *     SpatialAdaptiveQuantization?: 'DISABLED'|'ENABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
