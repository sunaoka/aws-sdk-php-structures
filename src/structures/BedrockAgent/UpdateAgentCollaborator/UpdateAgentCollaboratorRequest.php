<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateAgentCollaborator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentId
 * @property string $agentVersion
 * @property string $collaboratorId
 * @property Shapes\AgentDescriptor $agentDescriptor
 * @property string $collaboratorName
 * @property string $collaborationInstruction
 * @property 'TO_COLLABORATOR'|'DISABLED'|null $relayConversationHistory
 */
class UpdateAgentCollaboratorRequest extends Request
{
    /**
     * @param array{
     *     agentId: string,
     *     agentVersion: string,
     *     collaboratorId: string,
     *     agentDescriptor: Shapes\AgentDescriptor,
     *     collaboratorName: string,
     *     collaborationInstruction: string,
     *     relayConversationHistory?: 'TO_COLLABORATOR'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
