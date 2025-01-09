<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\GetMessagingStreamingConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceArn
 */
class GetMessagingStreamingConfigurationsRequest extends Request
{
    /**
     * @param array{AppInstanceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
