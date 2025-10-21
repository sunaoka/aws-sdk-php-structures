<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OFF'|'LOW'|'MEDIUM'|'HIGH'|'HIGHER'|'MAX'|null $AdaptiveQuantization
 * @property 'BIT_8'|'BIT_10'|null $BitDepth
 * @property 'DISABLED'|'ENABLED'|null $FilmGrainSynthesis
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null $FramerateControl
 * @property 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER'|'MAINTAIN_FRAME_COUNT'|null $FramerateConversionAlgorithm
 * @property int<1, 2147483647>|null $FramerateDenominator
 * @property int<1, 2147483647>|null $FramerateNumerator
 * @property double|null $GopSize
 * @property int<1000, 1152000000>|null $MaxBitrate
 * @property int<0, 15>|null $NumberBFramesBetweenReferenceFrames
 * @property list<'PSNR'|'SSIM'|'MS_SSIM'|'PSNR_HVS'|'VMAF'|'QVBR'|'SHOT_CHANGE'>|null $PerFrameMetrics
 * @property Av1QvbrSettings|null $QvbrSettings
 * @property 'QVBR'|null $RateControlMode
 * @property int<1, 32>|null $Slices
 * @property 'DISABLED'|'ENABLED'|null $SpatialAdaptiveQuantization
 */
class Av1Settings extends Shape
{
    /**
     * @param array{
     *     AdaptiveQuantization?: 'OFF'|'LOW'|'MEDIUM'|'HIGH'|'HIGHER'|'MAX'|null,
     *     BitDepth?: 'BIT_8'|'BIT_10'|null,
     *     FilmGrainSynthesis?: 'DISABLED'|'ENABLED'|null,
     *     FramerateControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null,
     *     FramerateConversionAlgorithm?: 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER'|'MAINTAIN_FRAME_COUNT'|null,
     *     FramerateDenominator?: int<1, 2147483647>|null,
     *     FramerateNumerator?: int<1, 2147483647>|null,
     *     GopSize?: double|null,
     *     MaxBitrate?: int<1000, 1152000000>|null,
     *     NumberBFramesBetweenReferenceFrames?: int<0, 15>|null,
     *     PerFrameMetrics?: list<'PSNR'|'SSIM'|'MS_SSIM'|'PSNR_HVS'|'VMAF'|'QVBR'|'SHOT_CHANGE'>|null,
     *     QvbrSettings?: Av1QvbrSettings|null,
     *     RateControlMode?: 'QVBR'|null,
     *     Slices?: int<1, 32>|null,
     *     SpatialAdaptiveQuantization?: 'DISABLED'|'ENABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
