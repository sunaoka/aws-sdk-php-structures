<?php

namespace Sunaoka\Aws\Structures\Deadline\GetSessionAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EnvironmentEnterSessionActionDefinition $envEnter
 * @property EnvironmentExitSessionActionDefinition $envExit
 * @property TaskRunSessionActionDefinition $taskRun
 * @property SyncInputJobAttachmentsSessionActionDefinition $syncInputJobAttachments
 */
class SessionActionDefinition extends Shape
{
    /**
     * @param array{
     *     envEnter?: EnvironmentEnterSessionActionDefinition,
     *     envExit?: EnvironmentExitSessionActionDefinition,
     *     taskRun?: TaskRunSessionActionDefinition,
     *     syncInputJobAttachments?: SyncInputJobAttachmentsSessionActionDefinition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
