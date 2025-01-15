<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetLabelDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BoundingBox|null $BoundingBox
 * @property float|null $Confidence
 * @property list<DominantColor>|null $DominantColors
 */
class Instance extends Shape
{
    /**
     * @param array{
     *     BoundingBox?: BoundingBox|null,
     *     Confidence?: float|null,
     *     DominantColors?: list<DominantColor>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
