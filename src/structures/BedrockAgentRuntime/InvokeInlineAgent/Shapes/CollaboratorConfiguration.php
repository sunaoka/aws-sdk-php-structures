<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $collaboratorName
 * @property string $collaboratorInstruction
 * @property string|null $agentAliasArn
 * @property 'TO_COLLABORATOR'|'DISABLED'|null $relayConversationHistory
 */
class CollaboratorConfiguration extends Shape
{
    /**
     * @param array{
     *     collaboratorName: string,
     *     collaboratorInstruction: string,
     *     agentAliasArn?: string|null,
     *     relayConversationHistory?: 'TO_COLLABORATOR'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
