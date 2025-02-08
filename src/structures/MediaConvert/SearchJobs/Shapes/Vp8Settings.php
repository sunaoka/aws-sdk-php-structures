<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1000, 1152000000>|null $Bitrate
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null $FramerateControl
 * @property 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER'|'MAINTAIN_FRAME_COUNT'|null $FramerateConversionAlgorithm
 * @property int<1, 2147483647>|null $FramerateDenominator
 * @property int<1, 2147483647>|null $FramerateNumerator
 * @property double|null $GopSize
 * @property int<0, 47185920>|null $HrdBufferSize
 * @property int<1000, 1152000000>|null $MaxBitrate
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null $ParControl
 * @property int<1, 2147483647>|null $ParDenominator
 * @property int<1, 2147483647>|null $ParNumerator
 * @property 'MULTI_PASS'|'MULTI_PASS_HQ'|null $QualityTuningLevel
 * @property 'VBR'|null $RateControlMode
 */
class Vp8Settings extends Shape
{
    /**
     * @param array{
     *     Bitrate?: int<1000, 1152000000>|null,
     *     FramerateControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null,
     *     FramerateConversionAlgorithm?: 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER'|'MAINTAIN_FRAME_COUNT'|null,
     *     FramerateDenominator?: int<1, 2147483647>|null,
     *     FramerateNumerator?: int<1, 2147483647>|null,
     *     GopSize?: double|null,
     *     HrdBufferSize?: int<0, 47185920>|null,
     *     MaxBitrate?: int<1000, 1152000000>|null,
     *     ParControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null,
     *     ParDenominator?: int<1, 2147483647>|null,
     *     ParNumerator?: int<1, 2147483647>|null,
     *     QualityTuningLevel?: 'MULTI_PASS'|'MULTI_PASS_HQ'|null,
     *     RateControlMode?: 'VBR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
