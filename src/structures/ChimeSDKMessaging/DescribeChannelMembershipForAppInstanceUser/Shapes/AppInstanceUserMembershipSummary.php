<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\DescribeChannelMembershipForAppInstanceUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|'HIDDEN' $Type
 * @property \Aws\Api\DateTimeResult $ReadMarkerTimestamp
 * @property string $SubChannelId
 */
class AppInstanceUserMembershipSummary extends Shape
{
    /**
     * @param array{
     *     Type?: 'DEFAULT'|'HIDDEN',
     *     ReadMarkerTimestamp?: \Aws\Api\DateTimeResult,
     *     SubChannelId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
