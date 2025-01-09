<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListDatasetLabels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LabelName
 * @property DatasetLabelStats $LabelStats
 */
class DatasetLabelDescription extends Shape
{
    /**
     * @param array{
     *     LabelName?: string,
     *     LabelStats?: DatasetLabelStats
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
