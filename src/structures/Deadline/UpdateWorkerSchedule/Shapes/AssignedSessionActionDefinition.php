<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateWorkerSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssignedEnvironmentEnterSessionActionDefinition $envEnter
 * @property AssignedEnvironmentExitSessionActionDefinition $envExit
 * @property AssignedTaskRunSessionActionDefinition $taskRun
 * @property AssignedSyncInputJobAttachmentsSessionActionDefinition $syncInputJobAttachments
 */
class AssignedSessionActionDefinition extends Shape
{
    /**
     * @param array{
     *     envEnter?: AssignedEnvironmentEnterSessionActionDefinition,
     *     envExit?: AssignedEnvironmentExitSessionActionDefinition,
     *     taskRun?: AssignedTaskRunSessionActionDefinition,
     *     syncInputJobAttachments?: AssignedSyncInputJobAttachmentsSessionActionDefinition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
