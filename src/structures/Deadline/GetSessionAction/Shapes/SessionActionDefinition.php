<?php

namespace Sunaoka\Aws\Structures\Deadline\GetSessionAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EnvironmentEnterSessionActionDefinition|null $envEnter
 * @property EnvironmentExitSessionActionDefinition|null $envExit
 * @property TaskRunSessionActionDefinition|null $taskRun
 * @property SyncInputJobAttachmentsSessionActionDefinition|null $syncInputJobAttachments
 */
class SessionActionDefinition extends Shape
{
    /**
     * @param array{
     *     envEnter?: EnvironmentEnterSessionActionDefinition|null,
     *     envExit?: EnvironmentExitSessionActionDefinition|null,
     *     taskRun?: TaskRunSessionActionDefinition|null,
     *     syncInputJobAttachments?: SyncInputJobAttachmentsSessionActionDefinition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
