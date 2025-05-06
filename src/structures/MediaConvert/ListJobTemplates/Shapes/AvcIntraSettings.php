<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CLASS_50'|'CLASS_100'|'CLASS_200'|'CLASS_4K_2K'|null $AvcIntraClass
 * @property AvcIntraUhdSettings|null $AvcIntraUhdSettings
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null $FramerateControl
 * @property 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER'|'MAINTAIN_FRAME_COUNT'|null $FramerateConversionAlgorithm
 * @property int<1, 1001>|null $FramerateDenominator
 * @property int<24, 60000>|null $FramerateNumerator
 * @property 'PROGRESSIVE'|'TOP_FIELD'|'BOTTOM_FIELD'|'FOLLOW_TOP_FIELD'|'FOLLOW_BOTTOM_FIELD'|null $InterlaceMode
 * @property list<'PSNR'|'SSIM'|'MS_SSIM'|'PSNR_HVS'|'VMAF'|'QVBR'>|null $PerFrameMetrics
 * @property 'INTERLACED'|'INTERLACED_OPTIMIZE'|null $ScanTypeConversionMode
 * @property 'DISABLED'|'ENABLED'|null $SlowPal
 * @property 'NONE'|'HARD'|null $Telecine
 */
class AvcIntraSettings extends Shape
{
    /**
     * @param array{
     *     AvcIntraClass?: 'CLASS_50'|'CLASS_100'|'CLASS_200'|'CLASS_4K_2K'|null,
     *     AvcIntraUhdSettings?: AvcIntraUhdSettings|null,
     *     FramerateControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null,
     *     FramerateConversionAlgorithm?: 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER'|'MAINTAIN_FRAME_COUNT'|null,
     *     FramerateDenominator?: int<1, 1001>|null,
     *     FramerateNumerator?: int<24, 60000>|null,
     *     InterlaceMode?: 'PROGRESSIVE'|'TOP_FIELD'|'BOTTOM_FIELD'|'FOLLOW_TOP_FIELD'|'FOLLOW_BOTTOM_FIELD'|null,
     *     PerFrameMetrics?: list<'PSNR'|'SSIM'|'MS_SSIM'|'PSNR_HVS'|'VMAF'|'QVBR'>|null,
     *     ScanTypeConversionMode?: 'INTERLACED'|'INTERLACED_OPTIMIZE'|null,
     *     SlowPal?: 'DISABLED'|'ENABLED'|null,
     *     Telecine?: 'NONE'|'HARD'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
