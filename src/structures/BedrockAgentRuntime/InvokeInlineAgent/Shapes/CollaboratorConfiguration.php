<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $agentAliasArn
 * @property string $collaboratorInstruction
 * @property string $collaboratorName
 * @property 'TO_COLLABORATOR'|'DISABLED'|null $relayConversationHistory
 */
class CollaboratorConfiguration extends Shape
{
    /**
     * @param array{
     *     agentAliasArn?: string|null,
     *     collaboratorInstruction: string,
     *     collaboratorName: string,
     *     relayConversationHistory?: 'TO_COLLABORATOR'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
