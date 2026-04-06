<?php

namespace Sunaoka\Aws\Structures\Deadline\GetSessionAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EnvironmentEnterSessionActionDefinition|null $envEnter
 * @property EnvironmentExitSessionActionDefinition|null $envExit
 * @property SyncInputJobAttachmentsSessionActionDefinition|null $syncInputJobAttachments
 * @property TaskRunSessionActionDefinition|null $taskRun
 */
class SessionActionDefinition extends Shape
{
    /**
     * @param array{
     *     envEnter?: EnvironmentEnterSessionActionDefinition|null,
     *     envExit?: EnvironmentExitSessionActionDefinition|null,
     *     syncInputJobAttachments?: SyncInputJobAttachmentsSessionActionDefinition|null,
     *     taskRun?: TaskRunSessionActionDefinition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
