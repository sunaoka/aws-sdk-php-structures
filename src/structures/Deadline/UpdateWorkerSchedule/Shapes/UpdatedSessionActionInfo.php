<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateWorkerSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUCCEEDED'|'FAILED'|'INTERRUPTED'|'CANCELED'|'NEVER_ATTEMPTED' $completedStatus
 * @property int $processExitCode
 * @property string $progressMessage
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property \Aws\Api\DateTimeResult $endedAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property float $progressPercent
 */
class UpdatedSessionActionInfo extends Shape
{
    /**
     * @param array{
     *     completedStatus?: 'SUCCEEDED'|'FAILED'|'INTERRUPTED'|'CANCELED'|'NEVER_ATTEMPTED',
     *     processExitCode?: int,
     *     progressMessage?: string,
     *     startedAt?: \Aws\Api\DateTimeResult,
     *     endedAt?: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult,
     *     progressPercent?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
