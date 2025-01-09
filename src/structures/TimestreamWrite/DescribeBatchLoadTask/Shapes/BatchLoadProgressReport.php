<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\DescribeBatchLoadTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $RecordsProcessed
 * @property int $RecordsIngested
 * @property int $ParseFailures
 * @property int $RecordIngestionFailures
 * @property int $FileFailures
 * @property int $BytesMetered
 */
class BatchLoadProgressReport extends Shape
{
    /**
     * @param array{
     *     RecordsProcessed?: int,
     *     RecordsIngested?: int,
     *     ParseFailures?: int,
     *     RecordIngestionFailures?: int,
     *     FileFailures?: int,
     *     BytesMetered?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
