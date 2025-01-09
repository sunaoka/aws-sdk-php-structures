<?php

namespace Sunaoka\Aws\Structures\Chime\DeleteProxySession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 * @property string $ProxySessionId
 */
class DeleteProxySessionRequest extends Request
{
    /**
     * @param array{
     *     VoiceConnectorId: string,
     *     ProxySessionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
