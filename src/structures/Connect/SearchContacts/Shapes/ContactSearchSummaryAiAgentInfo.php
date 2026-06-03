<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AiAgentVersionId
 * @property bool|null $AiAgentEscalated
 * @property 'AgentAssistance'|'SelfService'|null $AiUseCase
 */
class ContactSearchSummaryAiAgentInfo extends Shape
{
    /**
     * @param array{
     *     AiAgentVersionId?: string|null,
     *     AiAgentEscalated?: bool|null,
     *     AiUseCase?: 'AgentAssistance'|'SelfService'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
