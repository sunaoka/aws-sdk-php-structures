<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\GetMessagingStreamingConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Channel'|'ChannelMessage' $DataType
 * @property string $ResourceArn
 */
class StreamingConfiguration extends Shape
{
    /**
     * @param array{
     *     DataType: 'Channel'|'ChannelMessage',
     *     ResourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
