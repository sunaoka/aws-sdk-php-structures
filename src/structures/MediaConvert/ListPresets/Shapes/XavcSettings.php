<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListPresets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OFF'|'AUTO'|'LOW'|'MEDIUM'|'HIGH'|'HIGHER'|'MAX' $AdaptiveQuantization
 * @property 'AUTO'|'CABAC'|'CAVLC' $EntropyEncoding
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED' $FramerateControl
 * @property 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER' $FramerateConversionAlgorithm
 * @property int<1, 1001> $FramerateDenominator
 * @property int<24, 60000> $FramerateNumerator
 * @property 'XAVC_HD_INTRA_CBG'|'XAVC_4K_INTRA_CBG'|'XAVC_4K_INTRA_VBR'|'XAVC_HD'|'XAVC_4K' $Profile
 * @property 'DISABLED'|'ENABLED' $SlowPal
 * @property int<0, 128> $Softness
 * @property 'DISABLED'|'ENABLED' $SpatialAdaptiveQuantization
 * @property 'DISABLED'|'ENABLED' $TemporalAdaptiveQuantization
 * @property Xavc4kIntraCbgProfileSettings $Xavc4kIntraCbgProfileSettings
 * @property Xavc4kIntraVbrProfileSettings $Xavc4kIntraVbrProfileSettings
 * @property Xavc4kProfileSettings $Xavc4kProfileSettings
 * @property XavcHdIntraCbgProfileSettings $XavcHdIntraCbgProfileSettings
 * @property XavcHdProfileSettings $XavcHdProfileSettings
 */
class XavcSettings extends Shape
{
    /**
     * @param array{
     *     AdaptiveQuantization?: 'OFF'|'AUTO'|'LOW'|'MEDIUM'|'HIGH'|'HIGHER'|'MAX',
     *     EntropyEncoding?: 'AUTO'|'CABAC'|'CAVLC',
     *     FramerateControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED',
     *     FramerateConversionAlgorithm?: 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER',
     *     FramerateDenominator?: int<1, 1001>,
     *     FramerateNumerator?: int<24, 60000>,
     *     Profile?: 'XAVC_HD_INTRA_CBG'|'XAVC_4K_INTRA_CBG'|'XAVC_4K_INTRA_VBR'|'XAVC_HD'|'XAVC_4K',
     *     SlowPal?: 'DISABLED'|'ENABLED',
     *     Softness?: int<0, 128>,
     *     SpatialAdaptiveQuantization?: 'DISABLED'|'ENABLED',
     *     TemporalAdaptiveQuantization?: 'DISABLED'|'ENABLED',
     *     Xavc4kIntraCbgProfileSettings?: Xavc4kIntraCbgProfileSettings,
     *     Xavc4kIntraVbrProfileSettings?: Xavc4kIntraVbrProfileSettings,
     *     Xavc4kProfileSettings?: Xavc4kProfileSettings,
     *     XavcHdIntraCbgProfileSettings?: XavcHdIntraCbgProfileSettings,
     *     XavcHdProfileSettings?: XavcHdProfileSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
