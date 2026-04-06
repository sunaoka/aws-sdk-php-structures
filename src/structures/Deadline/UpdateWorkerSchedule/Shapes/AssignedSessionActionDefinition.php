<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateWorkerSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssignedEnvironmentEnterSessionActionDefinition|null $envEnter
 * @property AssignedEnvironmentExitSessionActionDefinition|null $envExit
 * @property AssignedSyncInputJobAttachmentsSessionActionDefinition|null $syncInputJobAttachments
 * @property AssignedTaskRunSessionActionDefinition|null $taskRun
 */
class AssignedSessionActionDefinition extends Shape
{
    /**
     * @param array{
     *     envEnter?: AssignedEnvironmentEnterSessionActionDefinition|null,
     *     envExit?: AssignedEnvironmentExitSessionActionDefinition|null,
     *     syncInputJobAttachments?: AssignedSyncInputJobAttachmentsSessionActionDefinition|null,
     *     taskRun?: AssignedTaskRunSessionActionDefinition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
