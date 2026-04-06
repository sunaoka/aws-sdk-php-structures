<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OFF'|'AUTO'|'LOW'|'MEDIUM'|'HIGH'|'HIGHER'|'MAX'|null $AdaptiveQuantization
 * @property 'AUTO'|'CABAC'|'CAVLC'|null $EntropyEncoding
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null $FramerateControl
 * @property 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER'|'MAINTAIN_FRAME_COUNT'|null $FramerateConversionAlgorithm
 * @property int<1, 1001>|null $FramerateDenominator
 * @property int<24, 60000>|null $FramerateNumerator
 * @property list<'PSNR'|'SSIM'|'MS_SSIM'|'PSNR_HVS'|'VMAF'|'QVBR'|'SHOT_CHANGE'>|null $PerFrameMetrics
 * @property 'XAVC_HD_INTRA_CBG'|'XAVC_4K_INTRA_CBG'|'XAVC_4K_INTRA_VBR'|'XAVC_HD'|'XAVC_4K'|null $Profile
 * @property 'DISABLED'|'ENABLED'|null $SlowPal
 * @property int<0, 128>|null $Softness
 * @property 'DISABLED'|'ENABLED'|null $SpatialAdaptiveQuantization
 * @property 'DISABLED'|'ENABLED'|null $TemporalAdaptiveQuantization
 * @property Xavc4kIntraCbgProfileSettings|null $Xavc4kIntraCbgProfileSettings
 * @property Xavc4kIntraVbrProfileSettings|null $Xavc4kIntraVbrProfileSettings
 * @property Xavc4kProfileSettings|null $Xavc4kProfileSettings
 * @property XavcHdIntraCbgProfileSettings|null $XavcHdIntraCbgProfileSettings
 * @property XavcHdProfileSettings|null $XavcHdProfileSettings
 */
class XavcSettings extends Shape
{
    /**
     * @param array{
     *     AdaptiveQuantization?: 'OFF'|'AUTO'|'LOW'|'MEDIUM'|'HIGH'|'HIGHER'|'MAX'|null,
     *     EntropyEncoding?: 'AUTO'|'CABAC'|'CAVLC'|null,
     *     FramerateControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null,
     *     FramerateConversionAlgorithm?: 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER'|'MAINTAIN_FRAME_COUNT'|null,
     *     FramerateDenominator?: int<1, 1001>|null,
     *     FramerateNumerator?: int<24, 60000>|null,
     *     PerFrameMetrics?: list<'PSNR'|'SSIM'|'MS_SSIM'|'PSNR_HVS'|'VMAF'|'QVBR'|'SHOT_CHANGE'>|null,
     *     Profile?: 'XAVC_HD_INTRA_CBG'|'XAVC_4K_INTRA_CBG'|'XAVC_4K_INTRA_VBR'|'XAVC_HD'|'XAVC_4K'|null,
     *     SlowPal?: 'DISABLED'|'ENABLED'|null,
     *     Softness?: int<0, 128>|null,
     *     SpatialAdaptiveQuantization?: 'DISABLED'|'ENABLED'|null,
     *     TemporalAdaptiveQuantization?: 'DISABLED'|'ENABLED'|null,
     *     Xavc4kIntraCbgProfileSettings?: Xavc4kIntraCbgProfileSettings|null,
     *     Xavc4kIntraVbrProfileSettings?: Xavc4kIntraVbrProfileSettings|null,
     *     Xavc4kProfileSettings?: Xavc4kProfileSettings|null,
     *     XavcHdIntraCbgProfileSettings?: XavcHdIntraCbgProfileSettings|null,
     *     XavcHdProfileSettings?: XavcHdProfileSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
