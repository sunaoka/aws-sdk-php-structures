<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $customerEncryptionKeyArn
 * @property string $foundationModel
 * @property string $instruction
 * @property int<60, 3600>|null $idleSessionTTLInSeconds
 * @property list<AgentActionGroup>|null $actionGroups
 * @property list<KnowledgeBase>|null $knowledgeBases
 * @property GuardrailConfigurationWithArn|null $guardrailConfiguration
 * @property PromptOverrideConfiguration|null $promptOverrideConfiguration
 * @property 'SUPERVISOR'|'SUPERVISOR_ROUTER'|'DISABLED'|null $agentCollaboration
 * @property list<CollaboratorConfiguration>|null $collaboratorConfigurations
 * @property string|null $agentName
 */
class Collaborator extends Shape
{
    /**
     * @param array{
     *     customerEncryptionKeyArn?: string|null,
     *     foundationModel: string,
     *     instruction: string,
     *     idleSessionTTLInSeconds?: int<60, 3600>|null,
     *     actionGroups?: list<AgentActionGroup>|null,
     *     knowledgeBases?: list<KnowledgeBase>|null,
     *     guardrailConfiguration?: GuardrailConfigurationWithArn|null,
     *     promptOverrideConfiguration?: PromptOverrideConfiguration|null,
     *     agentCollaboration?: 'SUPERVISOR'|'SUPERVISOR_ROUTER'|'DISABLED'|null,
     *     collaboratorConfigurations?: list<CollaboratorConfiguration>|null,
     *     agentName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
