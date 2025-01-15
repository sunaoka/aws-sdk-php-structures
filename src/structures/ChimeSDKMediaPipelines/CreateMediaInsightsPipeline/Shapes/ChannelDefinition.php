<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaInsightsPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 1> $ChannelId
 * @property 'AGENT'|'CUSTOMER'|null $ParticipantRole
 */
class ChannelDefinition extends Shape
{
    /**
     * @param array{
     *     ChannelId: int<0, 1>,
     *     ParticipantRole?: 'AGENT'|'CUSTOMER'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
