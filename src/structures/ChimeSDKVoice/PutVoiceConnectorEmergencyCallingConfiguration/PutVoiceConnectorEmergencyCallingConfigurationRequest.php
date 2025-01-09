<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\PutVoiceConnectorEmergencyCallingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 * @property Shapes\EmergencyCallingConfiguration $EmergencyCallingConfiguration
 */
class PutVoiceConnectorEmergencyCallingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     VoiceConnectorId: string,
     *     EmergencyCallingConfiguration: Shapes\EmergencyCallingConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
