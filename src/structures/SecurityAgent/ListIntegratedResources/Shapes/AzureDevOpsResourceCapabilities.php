<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListIntegratedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TriggerFilterGroup>|null $triggerFilterGroups
 * @property bool|null $leaveComments
 * @property bool|null $remediateCode
 */
class AzureDevOpsResourceCapabilities extends Shape
{
    /**
     * @param array{
     *     triggerFilterGroups?: list<TriggerFilterGroup>|null,
     *     leaveComments?: bool|null,
     *     remediateCode?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
