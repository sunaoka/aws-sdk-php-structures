<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\AssociateAgentCollaborator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AgentDescriptor $agentDescriptor
 * @property string $agentId
 * @property string $agentVersion
 * @property string $clientToken
 * @property string $collaborationInstruction
 * @property string $collaboratorName
 * @property 'TO_COLLABORATOR'|'DISABLED' $relayConversationHistory
 */
class AssociateAgentCollaboratorRequest extends Request
{
    /**
     * @param array{
     *     agentDescriptor: Shapes\AgentDescriptor,
     *     agentId: string,
     *     agentVersion: string,
     *     clientToken?: string,
     *     collaborationInstruction: string,
     *     collaboratorName: string,
     *     relayConversationHistory?: 'TO_COLLABORATOR'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
