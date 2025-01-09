<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $LabeledEntries
 * @property int $TotalEntries
 * @property int $TotalLabels
 * @property int $ErrorEntries
 */
class DatasetStats extends Shape
{
    /**
     * @param array{
     *     LabeledEntries?: int,
     *     TotalEntries?: int,
     *     TotalLabels?: int,
     *     ErrorEntries?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
