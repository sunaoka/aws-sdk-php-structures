<?php

namespace Sunaoka\Aws\Structures\Omics\ListBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property 'PENDING'|'SUBMITTING'|'INPROGRESS'|'STOPPING'|'CANCELLED'|'FAILED'|'PROCESSED'|'RUNS_DELETING'|'RUNS_DELETED'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property int|null $totalRuns
 * @property string|null $workflowId
 */
class BatchListItem extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     status?: 'PENDING'|'SUBMITTING'|'INPROGRESS'|'STOPPING'|'CANCELLED'|'FAILED'|'PROCESSED'|'RUNS_DELETING'|'RUNS_DELETED'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     totalRuns?: int|null,
     *     workflowId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
