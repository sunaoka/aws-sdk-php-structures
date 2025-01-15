<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetSegmentDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $Index
 * @property float|null $Confidence
 */
class ShotSegment extends Shape
{
    /**
     * @param array{
     *     Index?: int<0, max>|null,
     *     Confidence?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
