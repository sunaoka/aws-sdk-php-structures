<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AgentAssistance'|'SelfService'|null $AiUseCase
 * @property string|null $AiAgentVersionId
 * @property bool|null $AiAgentEscalated
 */
class AiAgentInfo extends Shape
{
    /**
     * @param array{
     *     AiUseCase?: 'AgentAssistance'|'SelfService'|null,
     *     AiAgentVersionId?: string|null,
     *     AiAgentEscalated?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
