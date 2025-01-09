<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetComposition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $channelArn
 * @property string $encoderConfigurationArn
 */
class ChannelDestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     channelArn: string,
     *     encoderConfigurationArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
