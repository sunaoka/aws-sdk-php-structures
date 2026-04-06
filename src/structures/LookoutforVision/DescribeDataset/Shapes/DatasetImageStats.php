<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Total
 * @property int|null $Labeled
 * @property int|null $Normal
 * @property int|null $Anomaly
 */
class DatasetImageStats extends Shape
{
    /**
     * @param array{
     *     Total?: int|null,
     *     Labeled?: int|null,
     *     Normal?: int|null,
     *     Anomaly?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
