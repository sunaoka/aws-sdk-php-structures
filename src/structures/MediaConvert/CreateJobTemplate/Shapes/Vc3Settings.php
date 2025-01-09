<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED' $FramerateControl
 * @property 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER' $FramerateConversionAlgorithm
 * @property int $FramerateDenominator
 * @property int $FramerateNumerator
 * @property 'INTERLACED'|'PROGRESSIVE' $InterlaceMode
 * @property 'INTERLACED'|'INTERLACED_OPTIMIZE' $ScanTypeConversionMode
 * @property 'DISABLED'|'ENABLED' $SlowPal
 * @property 'NONE'|'HARD' $Telecine
 * @property 'CLASS_145_8BIT'|'CLASS_220_8BIT'|'CLASS_220_10BIT' $Vc3Class
 */
class Vc3Settings extends Shape
{
    /**
     * @param array{
     *     FramerateControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED',
     *     FramerateConversionAlgorithm?: 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER',
     *     FramerateDenominator?: int,
     *     FramerateNumerator?: int,
     *     InterlaceMode?: 'INTERLACED'|'PROGRESSIVE',
     *     ScanTypeConversionMode?: 'INTERLACED'|'INTERLACED_OPTIMIZE',
     *     SlowPal?: 'DISABLED'|'ENABLED',
     *     Telecine?: 'NONE'|'HARD',
     *     Vc3Class?: 'CLASS_145_8BIT'|'CLASS_220_8BIT'|'CLASS_220_10BIT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
