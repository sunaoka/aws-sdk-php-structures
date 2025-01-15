<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DetectedText
 * @property 'LINE'|'WORD'|null $Type
 * @property int<0, max>|null $Id
 * @property int<0, max>|null $ParentId
 * @property float|null $Confidence
 * @property Geometry|null $Geometry
 */
class TextDetection extends Shape
{
    /**
     * @param array{
     *     DetectedText?: string|null,
     *     Type?: 'LINE'|'WORD'|null,
     *     Id?: int<0, max>|null,
     *     ParentId?: int<0, max>|null,
     *     Confidence?: float|null,
     *     Geometry?: Geometry|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
