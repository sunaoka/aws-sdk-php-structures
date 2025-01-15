<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListDatasetLabels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LabelName
 * @property DatasetLabelStats|null $LabelStats
 */
class DatasetLabelDescription extends Shape
{
    /**
     * @param array{
     *     LabelName?: string|null,
     *     LabelStats?: DatasetLabelStats|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
