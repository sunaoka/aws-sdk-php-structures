<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelsAssociatedWithChannelFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $ChannelArn
 * @property 'UNRESTRICTED'|'RESTRICTED' $Mode
 * @property 'PUBLIC'|'PRIVATE' $Privacy
 * @property string $Metadata
 */
class ChannelAssociatedWithFlowSummary extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     ChannelArn?: string,
     *     Mode?: 'UNRESTRICTED'|'RESTRICTED',
     *     Privacy?: 'PUBLIC'|'PRIVATE',
     *     Metadata?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
