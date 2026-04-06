<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateWorkerSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobId
 * @property LogConfiguration $logConfiguration
 * @property string $queueId
 * @property list<AssignedSessionAction> $sessionActions
 */
class AssignedSession extends Shape
{
    /**
     * @param array{
     *     jobId: string,
     *     logConfiguration: LogConfiguration,
     *     queueId: string,
     *     sessionActions: list<AssignedSessionAction>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
