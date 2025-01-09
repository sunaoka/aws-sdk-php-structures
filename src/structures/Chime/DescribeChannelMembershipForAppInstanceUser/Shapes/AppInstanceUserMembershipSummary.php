<?php

namespace Sunaoka\Aws\Structures\Chime\DescribeChannelMembershipForAppInstanceUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|'HIDDEN' $Type
 * @property \Aws\Api\DateTimeResult $ReadMarkerTimestamp
 */
class AppInstanceUserMembershipSummary extends Shape
{
    /**
     * @param array{
     *     Type?: 'DEFAULT'|'HIDDEN',
     *     ReadMarkerTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
