<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolNetworkOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $taskContext
 * @property \Aws\Api\DateTimeResult|null $taskEndTime
 * @property ErrorInfo|null $taskErrorDetails
 * @property string|null $taskName
 * @property \Aws\Api\DateTimeResult|null $taskStartTime
 * @property 'SCHEDULED'|'STARTED'|'IN_PROGRESS'|'COMPLETED'|'ERROR'|'SKIPPED'|'CANCELLED'|null $taskStatus
 */
class GetSolNetworkOperationTaskDetails extends Shape
{
    /**
     * @param array{
     *     taskContext?: array<string, string>|null,
     *     taskEndTime?: \Aws\Api\DateTimeResult|null,
     *     taskErrorDetails?: ErrorInfo|null,
     *     taskName?: string|null,
     *     taskStartTime?: \Aws\Api\DateTimeResult|null,
     *     taskStatus?: 'SCHEDULED'|'STARTED'|'IN_PROGRESS'|'COMPLETED'|'ERROR'|'SKIPPED'|'CANCELLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
