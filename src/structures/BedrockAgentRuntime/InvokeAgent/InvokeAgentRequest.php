<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentAliasId
 * @property string $agentId
 * @property Shapes\BedrockModelConfigurations $bedrockModelConfigurations
 * @property bool $enableTrace
 * @property bool $endSession
 * @property string $inputText
 * @property string $memoryId
 * @property string $sessionId
 * @property Shapes\SessionState $sessionState
 * @property string $sourceArn
 * @property Shapes\StreamingConfigurations $streamingConfigurations
 */
class InvokeAgentRequest extends Request
{
    /**
     * @param array{
     *     agentAliasId: string,
     *     agentId: string,
     *     bedrockModelConfigurations?: Shapes\BedrockModelConfigurations,
     *     enableTrace?: bool,
     *     endSession?: bool,
     *     inputText?: string,
     *     memoryId?: string,
     *     sessionId: string,
     *     sessionState?: Shapes\SessionState,
     *     sourceArn?: string,
     *     streamingConfigurations?: Shapes\StreamingConfigurations
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
