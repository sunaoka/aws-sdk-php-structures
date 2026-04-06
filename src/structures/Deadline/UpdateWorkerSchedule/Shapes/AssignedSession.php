<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateWorkerSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $queueId
 * @property string $jobId
 * @property list<AssignedSessionAction> $sessionActions
 * @property LogConfiguration $logConfiguration
 */
class AssignedSession extends Shape
{
    /**
     * @param array{
     *     queueId: string,
     *     jobId: string,
     *     sessionActions: list<AssignedSessionAction>,
     *     logConfiguration: LogConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
