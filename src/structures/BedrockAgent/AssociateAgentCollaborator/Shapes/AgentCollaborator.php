<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\AssociateAgentCollaborator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentDescriptor $agentDescriptor
 * @property string $agentId
 * @property string $agentVersion
 * @property string $clientToken
 * @property string $collaborationInstruction
 * @property string $collaboratorId
 * @property string $collaboratorName
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property 'TO_COLLABORATOR'|'DISABLED' $relayConversationHistory
 */
class AgentCollaborator extends Shape
{
    /**
     * @param array{
     *     agentDescriptor: AgentDescriptor,
     *     agentId: string,
     *     agentVersion: string,
     *     clientToken?: string,
     *     collaborationInstruction: string,
     *     collaboratorId: string,
     *     collaboratorName: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt: \Aws\Api\DateTimeResult,
     *     relayConversationHistory?: 'TO_COLLABORATOR'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
