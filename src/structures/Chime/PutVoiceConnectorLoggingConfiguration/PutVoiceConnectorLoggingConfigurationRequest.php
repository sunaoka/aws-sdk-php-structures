<?php

namespace Sunaoka\Aws\Structures\Chime\PutVoiceConnectorLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 * @property Shapes\LoggingConfiguration $LoggingConfiguration
 */
class PutVoiceConnectorLoggingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     VoiceConnectorId: string,
     *     LoggingConfiguration: Shapes\LoggingConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
