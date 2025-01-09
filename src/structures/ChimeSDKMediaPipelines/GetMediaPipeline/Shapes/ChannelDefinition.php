<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ChannelId
 * @property 'AGENT'|'CUSTOMER' $ParticipantRole
 */
class ChannelDefinition extends Shape
{
    /**
     * @param array{
     *     ChannelId: int,
     *     ParticipantRole?: 'AGENT'|'CUSTOMER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
