<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\UpdateGlobalSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\VoiceConnectorSettings|null $VoiceConnector
 */
class UpdateGlobalSettingsRequest extends Request
{
    /**
     * @param array{VoiceConnector?: Shapes\VoiceConnectorSettings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
