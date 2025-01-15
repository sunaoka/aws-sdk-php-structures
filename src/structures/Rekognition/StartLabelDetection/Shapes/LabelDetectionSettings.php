<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartLabelDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeneralLabelsSettings|null $GeneralLabels
 */
class LabelDetectionSettings extends Shape
{
    /**
     * @param array{GeneralLabels?: GeneralLabelsSettings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
