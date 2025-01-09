<?php

namespace Sunaoka\Aws\Structures\Chime\DescribeChannelBan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Identity $Member
 * @property string $ChannelArn
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property Identity $CreatedBy
 */
class ChannelBan extends Shape
{
    /**
     * @param array{
     *     Member?: Identity,
     *     ChannelArn?: string,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     CreatedBy?: Identity
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
