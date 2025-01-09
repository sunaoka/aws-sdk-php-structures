<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaInsightsPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 2> $NumberOfChannels
 * @property list<ChannelDefinition> $ChannelDefinitions
 */
class StreamChannelDefinition extends Shape
{
    /**
     * @param array{
     *     NumberOfChannels: int<1, 2>,
     *     ChannelDefinitions?: list<ChannelDefinition>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
