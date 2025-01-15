<?php

namespace Sunaoka\Aws\Structures\Glue\GetTableOptimizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NumberOfBytesCompacted
 * @property string|null $NumberOfFilesCompacted
 * @property string|null $NumberOfDpus
 * @property string|null $JobDurationInHour
 */
class RunMetrics extends Shape
{
    /**
     * @param array{
     *     NumberOfBytesCompacted?: string|null,
     *     NumberOfFilesCompacted?: string|null,
     *     NumberOfDpus?: string|null,
     *     JobDurationInHour?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
