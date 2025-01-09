<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetVoiceConnectorExternalSystemsConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 */
class GetVoiceConnectorExternalSystemsConfigurationRequest extends Request
{
    /**
     * @param array{VoiceConnectorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
