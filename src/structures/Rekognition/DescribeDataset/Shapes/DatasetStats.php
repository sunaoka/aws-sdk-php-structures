<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $LabeledEntries
 * @property int<0, max>|null $TotalEntries
 * @property int<0, max>|null $TotalLabels
 * @property int<0, max>|null $ErrorEntries
 */
class DatasetStats extends Shape
{
    /**
     * @param array{
     *     LabeledEntries?: int<0, max>|null,
     *     TotalEntries?: int<0, max>|null,
     *     TotalLabels?: int<0, max>|null,
     *     ErrorEntries?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
