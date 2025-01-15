<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetSegmentDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TECHNICAL_CUE'|'SHOT'|null $Type
 * @property string|null $ModelVersion
 */
class SegmentTypeInfo extends Shape
{
    /**
     * @param array{
     *     Type?: 'TECHNICAL_CUE'|'SHOT'|null,
     *     ModelVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
