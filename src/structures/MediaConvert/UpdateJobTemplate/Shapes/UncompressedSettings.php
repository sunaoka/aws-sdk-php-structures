<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'I420'|'I422'|'I444' $Fourcc
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED' $FramerateControl
 * @property 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER' $FramerateConversionAlgorithm
 * @property int $FramerateDenominator
 * @property int $FramerateNumerator
 * @property 'INTERLACED'|'PROGRESSIVE' $InterlaceMode
 * @property 'INTERLACED'|'INTERLACED_OPTIMIZE' $ScanTypeConversionMode
 * @property 'DISABLED'|'ENABLED' $SlowPal
 * @property 'NONE'|'HARD' $Telecine
 */
class UncompressedSettings extends Shape
{
    /**
     * @param array{
     *     Fourcc?: 'I420'|'I422'|'I444',
     *     FramerateControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED',
     *     FramerateConversionAlgorithm?: 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER',
     *     FramerateDenominator?: int,
     *     FramerateNumerator?: int,
     *     InterlaceMode?: 'INTERLACED'|'PROGRESSIVE',
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
