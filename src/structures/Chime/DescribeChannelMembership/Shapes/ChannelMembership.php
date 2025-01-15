<?php

namespace Sunaoka\Aws\Structures\Chime\DescribeChannelMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Identity|null $InvitedBy
 * @property 'DEFAULT'|'HIDDEN'|null $Type
 * @property Identity|null $Member
 * @property string|null $ChannelArn
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 */
class ChannelMembership extends Shape
{
    /**
     * @param array{
     *     InvitedBy?: Identity|null,
     *     Type?: 'DEFAULT'|'HIDDEN'|null,
     *     Member?: Identity|null,
     *     ChannelArn?: string|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
