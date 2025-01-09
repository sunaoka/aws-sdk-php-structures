<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectLabels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 20> $MaxDominantColors
 */
class DetectLabelsImagePropertiesSettings extends Shape
{
    /**
     * @param array{MaxDominantColors?: int<0, 20>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
