<?php

namespace Sunaoka\Aws\Structures\Chime\DescribeChannelMembershipForAppInstanceUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|'HIDDEN'|null $Type
 * @property \Aws\Api\DateTimeResult|null $ReadMarkerTimestamp
 */
class AppInstanceUserMembershipSummary extends Shape
{
    /**
     * @param array{
     *     Type?: 'DEFAULT'|'HIDDEN'|null,
     *     ReadMarkerTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
