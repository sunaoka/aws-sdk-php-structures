<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateWorkerSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUCCEEDED'|'FAILED'|'INTERRUPTED'|'CANCELED'|'NEVER_ATTEMPTED'|null $completedStatus
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property int<-2147483648, 2147483647>|null $processExitCode
 * @property string|null $progressMessage
 * @property float|null $progressPercent
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class UpdatedSessionActionInfo extends Shape
{
    /**
     * @param array{
     *     completedStatus?: 'SUCCEEDED'|'FAILED'|'INTERRUPTED'|'CANCELED'|'NEVER_ATTEMPTED'|null,
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     processExitCode?: int<-2147483648, 2147483647>|null,
     *     progressMessage?: string|null,
     *     progressPercent?: float|null,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
