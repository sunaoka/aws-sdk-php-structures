<?php

namespace Sunaoka\Aws\Structures\Chime\DeleteVoiceConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 */
class DeleteVoiceConnectorRequest extends Request
{
    /**
     * @param array{VoiceConnectorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
