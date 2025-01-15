<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\PutVoiceConnectorEmergencyCallingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EmergencyPhoneNumber
 * @property string|null $TestPhoneNumber
 * @property string $CallingCountry
 */
class DNISEmergencyCallingConfiguration extends Shape
{
    /**
     * @param array{
     *     EmergencyPhoneNumber: string,
     *     TestPhoneNumber?: string|null,
     *     CallingCountry: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
