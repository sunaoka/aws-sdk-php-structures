<?php

namespace Sunaoka\Aws\Structures\Deadline\ListSessionActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EnvironmentEnterSessionActionDefinitionSummary|null $envEnter
 * @property EnvironmentExitSessionActionDefinitionSummary|null $envExit
 * @property TaskRunSessionActionDefinitionSummary|null $taskRun
 * @property SyncInputJobAttachmentsSessionActionDefinitionSummary|null $syncInputJobAttachments
 */
class SessionActionDefinitionSummary extends Shape
{
    /**
     * @param array{
     *     envEnter?: EnvironmentEnterSessionActionDefinitionSummary|null,
     *     envExit?: EnvironmentExitSessionActionDefinitionSummary|null,
     *     taskRun?: TaskRunSessionActionDefinitionSummary|null,
     *     syncInputJobAttachments?: SyncInputJobAttachmentsSessionActionDefinitionSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
