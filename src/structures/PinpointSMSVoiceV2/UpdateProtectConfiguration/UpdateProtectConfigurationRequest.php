<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\UpdateProtectConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProtectConfigurationId
 * @property bool $DeletionProtectionEnabled
 */
class UpdateProtectConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ProtectConfigurationId: string,
     *     DeletionProtectionEnabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
