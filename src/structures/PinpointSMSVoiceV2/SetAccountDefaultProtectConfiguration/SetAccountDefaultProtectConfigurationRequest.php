<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SetAccountDefaultProtectConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProtectConfigurationId
 */
class SetAccountDefaultProtectConfigurationRequest extends Request
{
    /**
     * @param array{ProtectConfigurationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
