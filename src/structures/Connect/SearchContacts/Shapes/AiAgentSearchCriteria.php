<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property int|null $VersionNumber
 * @property bool|null $AiAgentEscalated
 * @property 'AgentAssistance'|'SelfService'|null $AiUseCase
 */
class AiAgentSearchCriteria extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     VersionNumber?: int|null,
     *     AiAgentEscalated?: bool|null,
     *     AiUseCase?: 'AgentAssistance'|'SelfService'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
