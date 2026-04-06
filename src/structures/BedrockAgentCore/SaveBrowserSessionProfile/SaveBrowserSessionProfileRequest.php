<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\SaveBrowserSessionProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $traceId
 * @property string|null $traceParent
 * @property string $profileIdentifier
 * @property string $browserIdentifier
 * @property string $sessionId
 * @property string|null $clientToken
 */
class SaveBrowserSessionProfileRequest extends Request
{
    /**
     * @param array{
     *     traceId?: string|null,
     *     traceParent?: string|null,
     *     profileIdentifier: string,
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
