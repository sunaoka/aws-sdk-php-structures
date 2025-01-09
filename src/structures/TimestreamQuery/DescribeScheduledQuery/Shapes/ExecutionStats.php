<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\DescribeScheduledQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ExecutionTimeInMillis
 * @property int $DataWrites
 * @property int $BytesMetered
 * @property int $CumulativeBytesScanned
 * @property int $RecordsIngested
 * @property int $QueryResultRows
 */
class ExecutionStats extends Shape
{
    /**
     * @param array{
     *     ExecutionTimeInMillis?: int,
     *     DataWrites?: int,
     *     BytesMetered?: int,
     *     CumulativeBytesScanned?: int,
     *     RecordsIngested?: int,
     *     QueryResultRows?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
