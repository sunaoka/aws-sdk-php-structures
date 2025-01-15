<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null $FramerateControl
 * @property 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER'|null $FramerateConversionAlgorithm
 * @property int<1, 1001>|null $FramerateDenominator
 * @property int<24, 60000>|null $FramerateNumerator
 * @property 'INTERLACED'|'PROGRESSIVE'|null $InterlaceMode
 * @property 'INTERLACED'|'INTERLACED_OPTIMIZE'|null $ScanTypeConversionMode
 * @property 'DISABLED'|'ENABLED'|null $SlowPal
 * @property 'NONE'|'HARD'|null $Telecine
 * @property 'CLASS_145_8BIT'|'CLASS_220_8BIT'|'CLASS_220_10BIT'|null $Vc3Class
 */
class Vc3Settings extends Shape
{
    /**
     * @param array{
     *     FramerateControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null,
     *     FramerateConversionAlgorithm?: 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER'|null,
     *     FramerateDenominator?: int<1, 1001>|null,
     *     FramerateNumerator?: int<24, 60000>|null,
     *     InterlaceMode?: 'INTERLACED'|'PROGRESSIVE'|null,
     *     ScanTypeConversionMode?: 'INTERLACED'|'INTERLACED_OPTIMIZE'|null,
     *     SlowPal?: 'DISABLED'|'ENABLED'|null,
     *     Telecine?: 'NONE'|'HARD'|null,
     *     Vc3Class?: 'CLASS_145_8BIT'|'CLASS_220_8BIT'|'CLASS_220_10BIT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
