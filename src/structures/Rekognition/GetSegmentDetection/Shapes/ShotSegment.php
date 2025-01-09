<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetSegmentDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $Index
 * @property float $Confidence
 */
class ShotSegment extends Shape
{
    /**
     * @param array{
     *     Index?: int<0, max>,
     *     Confidence?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
