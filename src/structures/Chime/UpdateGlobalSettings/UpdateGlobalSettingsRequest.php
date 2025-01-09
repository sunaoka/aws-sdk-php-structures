<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateGlobalSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\BusinessCallingSettings $BusinessCalling
 * @property Shapes\VoiceConnectorSettings $VoiceConnector
 */
class UpdateGlobalSettingsRequest extends Request
{
    /**
     * @param array{
     *     BusinessCalling?: Shapes\BusinessCallingSettings,
     *     VoiceConnector?: Shapes\VoiceConnectorSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
