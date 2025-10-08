<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StopCodeInterpreterSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $codeInterpreterIdentifier
 * @property string $sessionId
 * @property string|null $clientToken
 */
class StopCodeInterpreterSessionRequest extends Request
{
    /**
     * @param array{
     *     codeInterpreterIdentifier: string,
     *     sessionId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
