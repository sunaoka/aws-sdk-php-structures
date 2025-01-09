<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetTextDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DetectedText
 * @property 'LINE'|'WORD' $Type
 * @property int $Id
 * @property int $ParentId
 * @property float $Confidence
 * @property Geometry $Geometry
 */
class TextDetection extends Shape
{
    /**
     * @param array{
     *     DetectedText?: string,
     *     Type?: 'LINE'|'WORD',
     *     Id?: int,
     *     ParentId?: int,
     *     Confidence?: float,
     *     Geometry?: Geometry
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
