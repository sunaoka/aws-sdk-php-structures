<?php

namespace Sunaoka\Aws\Structures\Deadline\ListSessionActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EnvironmentEnterSessionActionDefinitionSummary $envEnter
 * @property EnvironmentExitSessionActionDefinitionSummary $envExit
 * @property TaskRunSessionActionDefinitionSummary $taskRun
 * @property SyncInputJobAttachmentsSessionActionDefinitionSummary $syncInputJobAttachments
 */
class SessionActionDefinitionSummary extends Shape
{
    /**
     * @param array{
     *     envEnter?: EnvironmentEnterSessionActionDefinitionSummary,
     *     envExit?: EnvironmentExitSessionActionDefinitionSummary,
     *     taskRun?: TaskRunSessionActionDefinitionSummary,
     *     syncInputJobAttachments?: SyncInputJobAttachmentsSessionActionDefinitionSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
