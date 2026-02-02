<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FOLLOWING_CHANNEL'|'PRIMARY_CHANNEL'|null $LinkedChannelType
 * @property string|null $PrimaryChannelArn
 */
class DescribeFollowerChannelSettings extends Shape
{
    /**
     * @param array{
     *     LinkedChannelType?: 'FOLLOWING_CHANNEL'|'PRIMARY_CHANNEL'|null,
     *     PrimaryChannelArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
