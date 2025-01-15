<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectLabels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeneralLabelsSettings|null $GeneralLabels
 * @property DetectLabelsImagePropertiesSettings|null $ImageProperties
 */
class DetectLabelsSettings extends Shape
{
    /**
     * @param array{
     *     GeneralLabels?: GeneralLabelsSettings|null,
     *     ImageProperties?: DetectLabelsImagePropertiesSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
