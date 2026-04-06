<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\AssociateProtectConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProtectConfigurationId
 * @property string $ConfigurationSetName
 */
class AssociateProtectConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ProtectConfigurationId: string,
     *     ConfigurationSetName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
