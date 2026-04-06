<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBrowserSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $browserIdentifier
 * @property string $sessionId
 */
class GetBrowserSessionRequest extends Request
{
    /**
     * @param array{
     *     browserIdentifier: string,
     *     sessionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
