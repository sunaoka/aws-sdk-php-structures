<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AgentActionGroup>|null $actionGroups
 * @property 'SUPERVISOR'|'SUPERVISOR_ROUTER'|'DISABLED'|null $agentCollaboration
 * @property string|null $agentName
 * @property Shapes\InlineBedrockModelConfigurations|null $bedrockModelConfigurations
 * @property list<Shapes\CollaboratorConfiguration>|null $collaboratorConfigurations
 * @property list<Shapes\Collaborator>|null $collaborators
 * @property Shapes\CustomOrchestration|null $customOrchestration
 * @property string|null $customerEncryptionKeyArn
 * @property bool|null $enableTrace
 * @property bool|null $endSession
 * @property string $foundationModel
 * @property Shapes\GuardrailConfigurationWithArn|null $guardrailConfiguration
 * @property int<60, 3600>|null $idleSessionTTLInSeconds
 * @property Shapes\InlineSessionState|null $inlineSessionState
 * @property string|null $inputText
 * @property string $instruction
 * @property list<Shapes\KnowledgeBase>|null $knowledgeBases
 * @property 'DEFAULT'|'CUSTOM_ORCHESTRATION'|null $orchestrationType
 * @property Shapes\PromptCreationConfigurations|null $promptCreationConfigurations
 * @property Shapes\PromptOverrideConfiguration|null $promptOverrideConfiguration
 * @property string $sessionId
 * @property Shapes\StreamingConfigurations|null $streamingConfigurations
 */
class InvokeInlineAgentRequest extends Request
{
    /**
     * @param array{
     *     actionGroups?: list<Shapes\AgentActionGroup>|null,
     *     agentCollaboration?: 'SUPERVISOR'|'SUPERVISOR_ROUTER'|'DISABLED'|null,
     *     agentName?: string|null,
     *     bedrockModelConfigurations?: Shapes\InlineBedrockModelConfigurations|null,
     *     collaboratorConfigurations?: list<Shapes\CollaboratorConfiguration>|null,
     *     collaborators?: list<Shapes\Collaborator>|null,
     *     customOrchestration?: Shapes\CustomOrchestration|null,
     *     customerEncryptionKeyArn?: string|null,
     *     enableTrace?: bool|null,
     *     endSession?: bool|null,
     *     foundationModel: string,
     *     guardrailConfiguration?: Shapes\GuardrailConfigurationWithArn|null,
     *     idleSessionTTLInSeconds?: int<60, 3600>|null,
     *     inlineSessionState?: Shapes\InlineSessionState|null,
     *     inputText?: string|null,
     *     instruction: string,
     *     knowledgeBases?: list<Shapes\KnowledgeBase>|null,
     *     orchestrationType?: 'DEFAULT'|'CUSTOM_ORCHESTRATION'|null,
     *     promptCreationConfigurations?: Shapes\PromptCreationConfigurations|null,
     *     promptOverrideConfiguration?: Shapes\PromptOverrideConfiguration|null,
     *     sessionId: string,
     *     streamingConfigurations?: Shapes\StreamingConfigurations|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
