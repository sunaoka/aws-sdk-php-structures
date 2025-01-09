<?php

namespace Sunaoka\Aws\Structures\Glue\ListTableOptimizerRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $NumberOfBytesCompacted
 * @property int $NumberOfFilesCompacted
 * @property int $NumberOfDpus
 * @property double $JobDurationInHour
 */
class IcebergCompactionMetrics extends Shape
{
    /**
     * @param array{
     *     NumberOfBytesCompacted?: int,
     *     NumberOfFilesCompacted?: int,
     *     NumberOfDpus?: int,
     *     JobDurationInHour?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
