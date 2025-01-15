<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentAliasId
 * @property string $agentId
 * @property Shapes\BedrockModelConfigurations|null $bedrockModelConfigurations
 * @property bool|null $enableTrace
 * @property bool|null $endSession
 * @property string|null $inputText
 * @property string|null $memoryId
 * @property string $sessionId
 * @property Shapes\SessionState|null $sessionState
 * @property string|null $sourceArn
 * @property Shapes\StreamingConfigurations|null $streamingConfigurations
 */
class InvokeAgentRequest extends Request
{
    /**
     * @param array{
     *     agentAliasId: string,
     *     agentId: string,
     *     bedrockModelConfigurations?: Shapes\BedrockModelConfigurations|null,
     *     enableTrace?: bool|null,
     *     endSession?: bool|null,
     *     inputText?: string|null,
     *     memoryId?: string|null,
     *     sessionId: string,
     *     sessionState?: Shapes\SessionState|null,
     *     sourceArn?: string|null,
     *     streamingConfigurations?: Shapes\StreamingConfigurations|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
