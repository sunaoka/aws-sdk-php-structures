<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\UpdateProxySession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 * @property string $ProxySessionId
 * @property list<'Voice'|'SMS'> $Capabilities
 * @property int $ExpiryMinutes
 */
class UpdateProxySessionRequest extends Request
{
    /**
     * @param array{
     *     VoiceConnectorId: string,
     *     ProxySessionId: string,
     *     Capabilities: list<'Voice'|'SMS'>,
     *     ExpiryMinutes?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
