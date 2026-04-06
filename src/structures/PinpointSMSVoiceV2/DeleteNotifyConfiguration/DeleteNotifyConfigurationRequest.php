<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteNotifyConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NotifyConfigurationId
 */
class DeleteNotifyConfigurationRequest extends Request
{
    /**
     * @param array{NotifyConfigurationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
