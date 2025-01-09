<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DetectedText
 * @property 'LINE'|'WORD' $Type
 * @property int<0, max> $Id
 * @property int<0, max> $ParentId
 * @property float $Confidence
 * @property Geometry $Geometry
 */
class TextDetection extends Shape
{
    /**
     * @param array{
     *     DetectedText?: string,
     *     Type?: 'LINE'|'WORD',
     *     Id?: int<0, max>,
     *     ParentId?: int<0, max>,
     *     Confidence?: float,
     *     Geometry?: Geometry
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
