<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\StartComposition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $channelArn
 * @property string|null $encoderConfigurationArn
 */
class ChannelDestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     channelArn: string,
     *     encoderConfigurationArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
