<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AgentActionGroup> $actionGroups
 * @property Shapes\InlineBedrockModelConfigurations $bedrockModelConfigurations
 * @property string $customerEncryptionKeyArn
 * @property bool $enableTrace
 * @property bool $endSession
 * @property string $foundationModel
 * @property Shapes\GuardrailConfigurationWithArn $guardrailConfiguration
 * @property int<60, 3600> $idleSessionTTLInSeconds
 * @property Shapes\InlineSessionState $inlineSessionState
 * @property string $inputText
 * @property string $instruction
 * @property list<Shapes\KnowledgeBase> $knowledgeBases
 * @property Shapes\PromptOverrideConfiguration $promptOverrideConfiguration
 * @property string $sessionId
 */
class InvokeInlineAgentRequest extends Request
{
    /**
     * @param array{
     *     actionGroups?: list<Shapes\AgentActionGroup>,
     *     bedrockModelConfigurations?: Shapes\InlineBedrockModelConfigurations,
     *     customerEncryptionKeyArn?: string,
     *     enableTrace?: bool,
     *     endSession?: bool,
     *     foundationModel: string,
     *     guardrailConfiguration?: Shapes\GuardrailConfigurationWithArn,
     *     idleSessionTTLInSeconds?: int<60, 3600>,
     *     inlineSessionState?: Shapes\InlineSessionState,
     *     inputText?: string,
     *     instruction: string,
     *     knowledgeBases?: list<Shapes\KnowledgeBase>,
     *     promptOverrideConfiguration?: Shapes\PromptOverrideConfiguration,
     *     sessionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
