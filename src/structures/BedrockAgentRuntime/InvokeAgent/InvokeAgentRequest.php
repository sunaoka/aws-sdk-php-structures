<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SessionState|null $sessionState
 * @property string $agentId
 * @property string $agentAliasId
 * @property string $sessionId
 * @property bool|null $endSession
 * @property bool|null $enableTrace
 * @property string|null $inputText
 * @property string|null $memoryId
 * @property Shapes\BedrockModelConfigurations|null $bedrockModelConfigurations
 * @property Shapes\StreamingConfigurations|null $streamingConfigurations
 * @property Shapes\PromptCreationConfigurations|null $promptCreationConfigurations
 * @property string|null $sourceArn
 */
class InvokeAgentRequest extends Request
{
    /**
     * @param array{
     *     sessionState?: Shapes\SessionState|null,
     *     agentId: string,
     *     agentAliasId: string,
     *     sessionId: string,
     *     endSession?: bool|null,
     *     enableTrace?: bool|null,
     *     inputText?: string|null,
     *     memoryId?: string|null,
     *     bedrockModelConfigurations?: Shapes\BedrockModelConfigurations|null,
     *     streamingConfigurations?: Shapes\StreamingConfigurations|null,
     *     promptCreationConfigurations?: Shapes\PromptCreationConfigurations|null,
     *     sourceArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
