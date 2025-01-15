<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 2> $NumberOfChannels
 * @property list<ChannelDefinition>|null $ChannelDefinitions
 */
class StreamChannelDefinition extends Shape
{
    /**
     * @param array{
     *     NumberOfChannels: int<1, 2>,
     *     ChannelDefinitions?: list<ChannelDefinition>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
