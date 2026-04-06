<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeImportTaskBatches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $batchId
 * @property 'IN_PROGRESS'|'CANCELLED'|'COMPLETED'|'FAILED' $status
 * @property string|null $errorMessage
 */
class ImportBatch extends Shape
{
    /**
     * @param array{
     *     batchId: string,
     *     status: 'IN_PROGRESS'|'CANCELLED'|'COMPLETED'|'FAILED',
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
