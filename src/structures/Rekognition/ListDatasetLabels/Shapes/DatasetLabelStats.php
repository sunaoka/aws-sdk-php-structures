<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListDatasetLabels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $EntryCount
 * @property int $BoundingBoxCount
 */
class DatasetLabelStats extends Shape
{
    /**
     * @param array{
     *     EntryCount?: int,
     *     BoundingBoxCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
