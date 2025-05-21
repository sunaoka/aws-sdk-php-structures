<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sessionIdentifier
 */
class GetSessionRequest extends Request
{
    /**
     * @param array{sessionIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
