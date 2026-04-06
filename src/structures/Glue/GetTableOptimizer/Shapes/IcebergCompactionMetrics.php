<?php

namespace Sunaoka\Aws\Structures\Glue\GetTableOptimizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $NumberOfBytesCompacted
 * @property int|null $NumberOfFilesCompacted
 * @property double|null $DpuHours
 * @property int|null $NumberOfDpus
 * @property double|null $JobDurationInHour
 */
class IcebergCompactionMetrics extends Shape
{
    /**
     * @param array{
     *     NumberOfBytesCompacted?: int|null,
     *     NumberOfFilesCompacted?: int|null,
     *     DpuHours?: double|null,
     *     NumberOfDpus?: int|null,
     *     JobDurationInHour?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
