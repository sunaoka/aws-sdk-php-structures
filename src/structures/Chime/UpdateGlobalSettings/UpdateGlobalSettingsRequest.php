<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateGlobalSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\BusinessCallingSettings|null $BusinessCalling
 * @property Shapes\VoiceConnectorSettings|null $VoiceConnector
 */
class UpdateGlobalSettingsRequest extends Request
{
    /**
     * @param array{
     *     BusinessCalling?: Shapes\BusinessCallingSettings|null,
     *     VoiceConnector?: Shapes\VoiceConnectorSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
