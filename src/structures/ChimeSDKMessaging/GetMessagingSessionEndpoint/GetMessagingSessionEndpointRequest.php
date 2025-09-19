<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\GetMessagingSessionEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'IPV4_ONLY'|'DUAL_STACK'|null $NetworkType
 */
class GetMessagingSessionEndpointRequest extends Request
{
    /**
     * @param array{NetworkType?: 'IPV4_ONLY'|'DUAL_STACK'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
