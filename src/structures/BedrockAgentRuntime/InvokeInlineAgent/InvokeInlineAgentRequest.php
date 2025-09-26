<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $customerEncryptionKeyArn
 * @property string $foundationModel
 * @property string $instruction
 * @property int<60, 3600>|null $idleSessionTTLInSeconds
 * @property list<Shapes\AgentActionGroup>|null $actionGroups
 * @property list<Shapes\KnowledgeBase>|null $knowledgeBases
 * @property Shapes\GuardrailConfigurationWithArn|null $guardrailConfiguration
 * @property Shapes\PromptOverrideConfiguration|null $promptOverrideConfiguration
 * @property 'SUPERVISOR'|'SUPERVISOR_ROUTER'|'DISABLED'|null $agentCollaboration
 * @property list<Shapes\CollaboratorConfiguration>|null $collaboratorConfigurations
 * @property string|null $agentName
 * @property string $sessionId
 * @property bool|null $endSession
 * @property bool|null $enableTrace
 * @property string|null $inputText
 * @property Shapes\StreamingConfigurations|null $streamingConfigurations
 * @property Shapes\PromptCreationConfigurations|null $promptCreationConfigurations
 * @property Shapes\InlineSessionState|null $inlineSessionState
 * @property list<Shapes\Collaborator>|null $collaborators
 * @property Shapes\InlineBedrockModelConfigurations|null $bedrockModelConfigurations
 * @property 'DEFAULT'|'CUSTOM_ORCHESTRATION'|null $orchestrationType
 * @property Shapes\CustomOrchestration|null $customOrchestration
 */
class InvokeInlineAgentRequest extends Request
{
    /**
     * @param array{
     *     customerEncryptionKeyArn?: string|null,
     *     foundationModel: string,
     *     instruction: string,
     *     idleSessionTTLInSeconds?: int<60, 3600>|null,
     *     actionGroups?: list<Shapes\AgentActionGroup>|null,
     *     knowledgeBases?: list<Shapes\KnowledgeBase>|null,
     *     guardrailConfiguration?: Shapes\GuardrailConfigurationWithArn|null,
     *     promptOverrideConfiguration?: Shapes\PromptOverrideConfiguration|null,
     *     agentCollaboration?: 'SUPERVISOR'|'SUPERVISOR_ROUTER'|'DISABLED'|null,
     *     collaboratorConfigurations?: list<Shapes\CollaboratorConfiguration>|null,
     *     agentName?: string|null,
     *     sessionId: string,
     *     endSession?: bool|null,
     *     enableTrace?: bool|null,
     *     inputText?: string|null,
     *     streamingConfigurations?: Shapes\StreamingConfigurations|null,
     *     promptCreationConfigurations?: Shapes\PromptCreationConfigurations|null,
     *     inlineSessionState?: Shapes\InlineSessionState|null,
     *     collaborators?: list<Shapes\Collaborator>|null,
     *     bedrockModelConfigurations?: Shapes\InlineBedrockModelConfigurations|null,
     *     orchestrationType?: 'DEFAULT'|'CUSTOM_ORCHESTRATION'|null,
     *     customOrchestration?: Shapes\CustomOrchestration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
