<?php

namespace Sunaoka\Aws\Structures\Chime\GetVoiceConnectorProxy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 */
class GetVoiceConnectorProxyRequest extends Request
{
    /**
     * @param array{VoiceConnectorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
