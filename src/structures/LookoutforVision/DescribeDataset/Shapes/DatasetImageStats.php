<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Total
 * @property int $Labeled
 * @property int $Normal
 * @property int $Anomaly
 */
class DatasetImageStats extends Shape
{
    /**
     * @param array{
     *     Total?: int,
     *     Labeled?: int,
     *     Normal?: int,
     *     Anomaly?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
