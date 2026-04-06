<?php

namespace Sunaoka\Aws\Structures\Deadline\ListSessionActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EnvironmentEnterSessionActionDefinitionSummary|null $envEnter
 * @property EnvironmentExitSessionActionDefinitionSummary|null $envExit
 * @property SyncInputJobAttachmentsSessionActionDefinitionSummary|null $syncInputJobAttachments
 * @property TaskRunSessionActionDefinitionSummary|null $taskRun
 */
class SessionActionDefinitionSummary extends Shape
{
    /**
     * @param array{
     *     envEnter?: EnvironmentEnterSessionActionDefinitionSummary|null,
     *     envExit?: EnvironmentExitSessionActionDefinitionSummary|null,
     *     syncInputJobAttachments?: SyncInputJobAttachmentsSessionActionDefinitionSummary|null,
     *     taskRun?: TaskRunSessionActionDefinitionSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
