<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\AssociateAgentCollaborator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentId
 * @property string $agentVersion
 * @property Shapes\AgentDescriptor $agentDescriptor
 * @property string $collaboratorName
 * @property string $collaborationInstruction
 * @property 'TO_COLLABORATOR'|'DISABLED'|null $relayConversationHistory
 * @property string|null $clientToken
 */
class AssociateAgentCollaboratorRequest extends Request
{
    /**
     * @param array{
     *     agentId: string,
     *     agentVersion: string,
     *     agentDescriptor: Shapes\AgentDescriptor,
     *     collaboratorName: string,
     *     collaborationInstruction: string,
     *     relayConversationHistory?: 'TO_COLLABORATOR'|'DISABLED'|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
