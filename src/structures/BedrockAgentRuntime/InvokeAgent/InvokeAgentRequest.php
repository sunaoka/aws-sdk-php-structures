<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentAliasId
 * @property string $agentId
 * @property bool|null $enableTrace
 * @property bool|null $endSession
 * @property string|null $inputText
 * @property string|null $memoryId
 * @property string $sessionId
 * @property Shapes\SessionState|null $sessionState
 */
class InvokeAgentRequest extends Request
{
    /**
     * @param array{
     *     agentAliasId: string,
     *     agentId: string,
     *     enableTrace?: bool|null,
     *     endSession?: bool|null,
     *     inputText?: string|null,
     *     memoryId?: string|null,
     *     sessionId: string,
     *     sessionState?: Shapes\SessionState|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
