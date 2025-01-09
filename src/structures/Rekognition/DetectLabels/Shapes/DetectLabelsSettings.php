<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectLabels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeneralLabelsSettings $GeneralLabels
 * @property DetectLabelsImagePropertiesSettings $ImageProperties
 */
class DetectLabelsSettings extends Shape
{
    /**
     * @param array{
     *     GeneralLabels?: GeneralLabelsSettings,
     *     ImageProperties?: DetectLabelsImagePropertiesSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
