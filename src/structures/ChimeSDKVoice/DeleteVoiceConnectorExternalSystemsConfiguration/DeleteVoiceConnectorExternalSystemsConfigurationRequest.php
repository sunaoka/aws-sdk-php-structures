<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\DeleteVoiceConnectorExternalSystemsConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 */
class DeleteVoiceConnectorExternalSystemsConfigurationRequest extends Request
{
    /**
     * @param array{VoiceConnectorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
