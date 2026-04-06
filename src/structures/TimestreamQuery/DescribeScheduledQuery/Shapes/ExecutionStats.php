<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\DescribeScheduledQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ExecutionTimeInMillis
 * @property int|null $DataWrites
 * @property int|null $BytesMetered
 * @property int|null $CumulativeBytesScanned
 * @property int|null $RecordsIngested
 * @property int|null $QueryResultRows
 */
class ExecutionStats extends Shape
{
    /**
     * @param array{
     *     ExecutionTimeInMillis?: int|null,
     *     DataWrites?: int|null,
     *     BytesMetered?: int|null,
     *     CumulativeBytesScanned?: int|null,
     *     RecordsIngested?: int|null,
     *     QueryResultRows?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
