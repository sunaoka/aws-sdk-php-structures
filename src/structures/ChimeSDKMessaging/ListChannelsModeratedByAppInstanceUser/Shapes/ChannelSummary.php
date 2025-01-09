<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelsModeratedByAppInstanceUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $ChannelArn
 * @property 'UNRESTRICTED'|'RESTRICTED' $Mode
 * @property 'PUBLIC'|'PRIVATE' $Privacy
 * @property string $Metadata
 * @property \Aws\Api\DateTimeResult $LastMessageTimestamp
 */
class ChannelSummary extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     ChannelArn?: string,
     *     Mode?: 'UNRESTRICTED'|'RESTRICTED',
     *     Privacy?: 'PUBLIC'|'PRIVATE',
     *     Metadata?: string,
     *     LastMessageTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
