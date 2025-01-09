<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaInsightsPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $NumberOfChannels
 * @property list<ChannelDefinition> $ChannelDefinitions
 */
class StreamChannelDefinition extends Shape
{
    /**
     * @param array{
     *     NumberOfChannels: int,
     *     ChannelDefinitions?: list<ChannelDefinition>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
