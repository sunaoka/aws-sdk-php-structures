<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StopBrowserSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $traceId
 * @property string|null $traceParent
 * @property string $browserIdentifier
 * @property string $sessionId
 * @property string|null $clientToken
 */
class StopBrowserSessionRequest extends Request
{
    /**
     * @param array{
     *     traceId?: string|null,
     *     traceParent?: string|null,
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
