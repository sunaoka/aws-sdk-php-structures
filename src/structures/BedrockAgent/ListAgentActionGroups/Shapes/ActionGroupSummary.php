<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListAgentActionGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionGroupId
 * @property string $actionGroupName
 * @property 'ENABLED'|'DISABLED' $actionGroupState
 * @property string $description
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class ActionGroupSummary extends Shape
{
    /**
     * @param array{
     *     actionGroupId: string,
     *     actionGroupName: string,
     *     actionGroupState: 'ENABLED'|'DISABLED',
     *     description?: string,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
