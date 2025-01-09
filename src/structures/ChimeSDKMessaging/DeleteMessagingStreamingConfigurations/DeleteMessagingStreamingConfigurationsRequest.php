<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\DeleteMessagingStreamingConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceArn
 */
class DeleteMessagingStreamingConfigurationsRequest extends Request
{
    /**
     * @param array{AppInstanceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
