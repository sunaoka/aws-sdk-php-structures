<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\DescribeBatchLoadTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $RecordsProcessed
 * @property int|null $RecordsIngested
 * @property int|null $ParseFailures
 * @property int|null $RecordIngestionFailures
 * @property int|null $FileFailures
 * @property int|null $BytesMetered
 */
class BatchLoadProgressReport extends Shape
{
    /**
     * @param array{
     *     RecordsProcessed?: int|null,
     *     RecordsIngested?: int|null,
     *     ParseFailures?: int|null,
     *     RecordIngestionFailures?: int|null,
     *     FileFailures?: int|null,
     *     BytesMetered?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
