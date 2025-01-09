<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectLabels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxDominantColors
 */
class DetectLabelsImagePropertiesSettings extends Shape
{
    /**
     * @param array{MaxDominantColors?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
