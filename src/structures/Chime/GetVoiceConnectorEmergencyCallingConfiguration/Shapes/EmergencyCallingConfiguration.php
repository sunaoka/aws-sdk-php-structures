<?php

namespace Sunaoka\Aws\Structures\Chime\GetVoiceConnectorEmergencyCallingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DNISEmergencyCallingConfiguration>|null $DNIS
 */
class EmergencyCallingConfiguration extends Shape
{
    /**
     * @param array{DNIS?: list<DNISEmergencyCallingConfiguration>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
