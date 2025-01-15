<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateWorkerSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssignedEnvironmentEnterSessionActionDefinition|null $envEnter
 * @property AssignedEnvironmentExitSessionActionDefinition|null $envExit
 * @property AssignedTaskRunSessionActionDefinition|null $taskRun
 * @property AssignedSyncInputJobAttachmentsSessionActionDefinition|null $syncInputJobAttachments
 */
class AssignedSessionActionDefinition extends Shape
{
    /**
     * @param array{
     *     envEnter?: AssignedEnvironmentEnterSessionActionDefinition|null,
     *     envExit?: AssignedEnvironmentExitSessionActionDefinition|null,
     *     taskRun?: AssignedTaskRunSessionActionDefinition|null,
     *     syncInputJobAttachments?: AssignedSyncInputJobAttachmentsSessionActionDefinition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
