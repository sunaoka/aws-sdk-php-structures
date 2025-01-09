<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\PutMessagingStreamingConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceArn
 * @property list<Shapes\StreamingConfiguration> $StreamingConfigurations
 */
class PutMessagingStreamingConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceArn: string,
     *     StreamingConfigurations: list<Shapes\StreamingConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
