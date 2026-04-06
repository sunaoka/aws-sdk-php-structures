<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AgentActionGroup>|null $actionGroups
 * @property 'SUPERVISOR'|'SUPERVISOR_ROUTER'|'DISABLED'|null $agentCollaboration
 * @property string|null $agentName
 * @property list<CollaboratorConfiguration>|null $collaboratorConfigurations
 * @property string|null $customerEncryptionKeyArn
 * @property string $foundationModel
 * @property GuardrailConfigurationWithArn|null $guardrailConfiguration
 * @property int<60, 3600>|null $idleSessionTTLInSeconds
 * @property string $instruction
 * @property list<KnowledgeBase>|null $knowledgeBases
 * @property PromptOverrideConfiguration|null $promptOverrideConfiguration
 */
class Collaborator extends Shape
{
    /**
     * @param array{
     *     actionGroups?: list<AgentActionGroup>|null,
     *     agentCollaboration?: 'SUPERVISOR'|'SUPERVISOR_ROUTER'|'DISABLED'|null,
     *     agentName?: string|null,
     *     collaboratorConfigurations?: list<CollaboratorConfiguration>|null,
     *     customerEncryptionKeyArn?: string|null,
     *     foundationModel: string,
     *     guardrailConfiguration?: GuardrailConfigurationWithArn|null,
     *     idleSessionTTLInSeconds?: int<60, 3600>|null,
     *     instruction: string,
     *     knowledgeBases?: list<KnowledgeBase>|null,
     *     promptOverrideConfiguration?: PromptOverrideConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
