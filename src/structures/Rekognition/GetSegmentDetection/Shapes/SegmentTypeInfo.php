<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetSegmentDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TECHNICAL_CUE'|'SHOT' $Type
 * @property string $ModelVersion
 */
class SegmentTypeInfo extends Shape
{
    /**
     * @param array{
     *     Type?: 'TECHNICAL_CUE'|'SHOT',
     *     ModelVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
