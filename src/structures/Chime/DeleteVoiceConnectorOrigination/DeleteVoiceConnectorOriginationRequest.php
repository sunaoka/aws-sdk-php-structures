<?php

namespace Sunaoka\Aws\Structures\Chime\DeleteVoiceConnectorOrigination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 */
class DeleteVoiceConnectorOriginationRequest extends Request
{
    /**
     * @param array{VoiceConnectorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
