<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListDatasetLabels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $EntryCount
 * @property int<0, max>|null $BoundingBoxCount
 */
class DatasetLabelStats extends Shape
{
    /**
     * @param array{
     *     EntryCount?: int<0, max>|null,
     *     BoundingBoxCount?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
