<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\EndSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sessionIdentifier
 */
class EndSessionRequest extends Request
{
    /**
     * @param array{sessionIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
