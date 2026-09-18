<?php

namespace Sunaoka\Aws\Structures\QConnect\GetAIAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $aiAgentId
 * @property string|null $applicationId
 */
class AgentTarget extends Shape
{
    /**
     * @param array{
     *     aiAgentId?: string|null,
     *     applicationId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
