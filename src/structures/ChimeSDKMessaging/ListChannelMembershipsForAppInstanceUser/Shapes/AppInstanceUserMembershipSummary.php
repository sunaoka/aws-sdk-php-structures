<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelMembershipsForAppInstanceUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|'HIDDEN'|null $Type
 * @property \Aws\Api\DateTimeResult|null $ReadMarkerTimestamp
 * @property string|null $SubChannelId
 */
class AppInstanceUserMembershipSummary extends Shape
{
    /**
     * @param array{
     *     Type?: 'DEFAULT'|'HIDDEN'|null,
     *     ReadMarkerTimestamp?: \Aws\Api\DateTimeResult|null,
     *     SubChannelId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
