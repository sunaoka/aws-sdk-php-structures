<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetLabelDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BoundingBox $BoundingBox
 * @property float $Confidence
 * @property list<DominantColor> $DominantColors
 */
class Instance extends Shape
{
    /**
     * @param array{
     *     BoundingBox?: BoundingBox,
     *     Confidence?: float,
     *     DominantColors?: list<DominantColor>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
