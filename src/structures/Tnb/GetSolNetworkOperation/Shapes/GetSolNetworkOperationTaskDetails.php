<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolNetworkOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $taskContext
 * @property \Aws\Api\DateTimeResult $taskEndTime
 * @property ErrorInfo $taskErrorDetails
 * @property string $taskName
 * @property \Aws\Api\DateTimeResult $taskStartTime
 * @property 'SCHEDULED'|'STARTED'|'IN_PROGRESS'|'COMPLETED'|'ERROR'|'SKIPPED'|'CANCELLED' $taskStatus
 */
class GetSolNetworkOperationTaskDetails extends Shape
{
    /**
     * @param array{
     *     taskContext?: array<string, string>,
     *     taskEndTime?: \Aws\Api\DateTimeResult,
     *     taskErrorDetails?: ErrorInfo,
     *     taskName?: string,
     *     taskStartTime?: \Aws\Api\DateTimeResult,
     *     taskStatus?: 'SCHEDULED'|'STARTED'|'IN_PROGRESS'|'COMPLETED'|'ERROR'|'SKIPPED'|'CANCELLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
