<?php

namespace Sunaoka\Aws\Structures\Chime\GetVoiceConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 */
class GetVoiceConnectorRequest extends Request
{
    /**
     * @param array{VoiceConnectorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
