<?php

namespace Sunaoka\Aws\Structures\Ecr\ListReplicationBackfills\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $replicationBackfillId
 * @property ReplicationDestination $destination
 * @property 'PREPARING'|'IN_PROGRESS'|'COMPLETE'|'FAILED'|'STOPPING'|'STOPPED' $status
 * @property string|null $failureCode
 * @property ReplicationBackfillProgress|null $progress
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 */
class ReplicationBackfillSummary extends Shape
{
    /**
     * @param array{
     *     replicationBackfillId: string,
     *     destination: ReplicationDestination,
     *     status: 'PREPARING'|'IN_PROGRESS'|'COMPLETE'|'FAILED'|'STOPPING'|'STOPPED',
     *     failureCode?: string|null,
     *     progress?: ReplicationBackfillProgress|null,
     *     startedAt: \Aws\Api\DateTimeResult,
     *     endedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
