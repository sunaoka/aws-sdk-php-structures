<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StopBrowserSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $browserIdentifier
 * @property string $sessionId
 * @property string|null $clientToken
 */
class StopBrowserSessionRequest extends Request
{
    /**
     * @param array{
     *     browserIdentifier: string,
     *     sessionId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
