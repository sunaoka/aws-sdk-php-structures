<?php

namespace Sunaoka\Aws\Structures\Chime\PutVoiceConnectorStreamingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 * @property Shapes\StreamingConfiguration $StreamingConfiguration
 */
class PutVoiceConnectorStreamingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     VoiceConnectorId: string,
     *     StreamingConfiguration: Shapes\StreamingConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
