<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\PutVoiceConnectorEmergencyCallingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DNISEmergencyCallingConfiguration> $DNIS
 */
class EmergencyCallingConfiguration extends Shape
{
    /**
     * @param array{DNIS?: list<DNISEmergencyCallingConfiguration>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
