<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetCodeInterpreterSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $codeInterpreterIdentifier
 * @property string $sessionId
 */
class GetCodeInterpreterSessionRequest extends Request
{
    /**
     * @param array{
     *     codeInterpreterIdentifier: string,
     *     sessionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
