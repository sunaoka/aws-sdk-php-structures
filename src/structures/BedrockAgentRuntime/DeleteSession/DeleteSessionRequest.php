<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\DeleteSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sessionIdentifier
 */
class DeleteSessionRequest extends Request
{
    /**
     * @param array{sessionIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
