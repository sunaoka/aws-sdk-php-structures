<?php

namespace Sunaoka\Aws\Structures\Chime\PutAppInstanceStreamingConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Channel'|'ChannelMessage' $AppInstanceDataType
 * @property string $ResourceArn
 */
class AppInstanceStreamingConfiguration extends Shape
{
    /**
     * @param array{
     *     AppInstanceDataType: 'Channel'|'ChannelMessage',
     *     ResourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
