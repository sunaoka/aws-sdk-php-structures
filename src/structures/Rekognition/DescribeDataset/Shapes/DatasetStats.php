<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $LabeledEntries
 * @property int<0, max> $TotalEntries
 * @property int<0, max> $TotalLabels
 * @property int<0, max> $ErrorEntries
 */
class DatasetStats extends Shape
{
    /**
     * @param array{
     *     LabeledEntries?: int<0, max>,
     *     TotalEntries?: int<0, max>,
     *     TotalLabels?: int<0, max>,
     *     ErrorEntries?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
