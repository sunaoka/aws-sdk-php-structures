<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CLASS_50'|'CLASS_100'|'CLASS_200'|'CLASS_4K_2K' $AvcIntraClass
 * @property AvcIntraUhdSettings $AvcIntraUhdSettings
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED' $FramerateControl
 * @property 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER' $FramerateConversionAlgorithm
 * @property int $FramerateDenominator
 * @property int $FramerateNumerator
 * @property 'PROGRESSIVE'|'TOP_FIELD'|'BOTTOM_FIELD'|'FOLLOW_TOP_FIELD'|'FOLLOW_BOTTOM_FIELD' $InterlaceMode
 * @property 'INTERLACED'|'INTERLACED_OPTIMIZE' $ScanTypeConversionMode
 * @property 'DISABLED'|'ENABLED' $SlowPal
 * @property 'NONE'|'HARD' $Telecine
 */
class AvcIntraSettings extends Shape
{
    /**
     * @param array{
     *     AvcIntraClass?: 'CLASS_50'|'CLASS_100'|'CLASS_200'|'CLASS_4K_2K',
     *     AvcIntraUhdSettings?: AvcIntraUhdSettings,
     *     FramerateControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED',
     *     FramerateConversionAlgorithm?: 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER',
     *     FramerateDenominator?: int,
     *     FramerateNumerator?: int,
     *     InterlaceMode?: 'PROGRESSIVE'|'TOP_FIELD'|'BOTTOM_FIELD'|'FOLLOW_TOP_FIELD'|'FOLLOW_BOTTOM_FIELD',
     *     ScanTypeConversionMode?: 'INTERLACED'|'INTERLACED_OPTIMIZE',
     *     SlowPal?: 'DISABLED'|'ENABLED',
     *     Telecine?: 'NONE'|'HARD'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
