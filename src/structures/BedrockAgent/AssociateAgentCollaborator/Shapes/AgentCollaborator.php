<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\AssociateAgentCollaborator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentId
 * @property string $agentVersion
 * @property AgentDescriptor $agentDescriptor
 * @property string $collaboratorId
 * @property string $collaborationInstruction
 * @property string $collaboratorName
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property 'TO_COLLABORATOR'|'DISABLED'|null $relayConversationHistory
 * @property string|null $clientToken
 */
class AgentCollaborator extends Shape
{
    /**
     * @param array{
     *     agentId: string,
     *     agentVersion: string,
     *     agentDescriptor: AgentDescriptor,
     *     collaboratorId: string,
     *     collaborationInstruction: string,
     *     collaboratorName: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt: \Aws\Api\DateTimeResult,
     *     relayConversationHistory?: 'TO_COLLABORATOR'|'DISABLED'|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
