<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateAgentCollaborator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AgentDescriptor $agentDescriptor
 * @property string $agentId
 * @property string $agentVersion
 * @property string $collaborationInstruction
 * @property string $collaboratorId
 * @property string $collaboratorName
 * @property 'TO_COLLABORATOR'|'DISABLED' $relayConversationHistory
 */
class UpdateAgentCollaboratorRequest extends Request
{
    /**
     * @param array{
     *     agentDescriptor: Shapes\AgentDescriptor,
     *     agentId: string,
     *     agentVersion: string,
     *     collaborationInstruction: string,
     *     collaboratorId: string,
     *     collaboratorName: string,
     *     relayConversationHistory?: 'TO_COLLABORATOR'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
