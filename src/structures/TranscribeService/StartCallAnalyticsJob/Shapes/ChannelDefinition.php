<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartCallAnalyticsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 1>|null $ChannelId
 * @property 'AGENT'|'CUSTOMER'|null $ParticipantRole
 */
class ChannelDefinition extends Shape
{
    /**
     * @param array{
     *     ChannelId?: int<0, 1>|null,
     *     ParticipantRole?: 'AGENT'|'CUSTOMER'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
