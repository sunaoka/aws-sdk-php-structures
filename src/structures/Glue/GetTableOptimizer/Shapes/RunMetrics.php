<?php

namespace Sunaoka\Aws\Structures\Glue\GetTableOptimizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NumberOfBytesCompacted
 * @property string $NumberOfFilesCompacted
 * @property string $NumberOfDpus
 * @property string $JobDurationInHour
 */
class RunMetrics extends Shape
{
    /**
     * @param array{
     *     NumberOfBytesCompacted?: string,
     *     NumberOfFilesCompacted?: string,
     *     NumberOfDpus?: string,
     *     JobDurationInHour?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
