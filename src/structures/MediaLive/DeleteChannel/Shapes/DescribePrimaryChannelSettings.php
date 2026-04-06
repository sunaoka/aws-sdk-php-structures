<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $FollowingChannelArns
 * @property 'FOLLOWING_CHANNEL'|'PRIMARY_CHANNEL'|null $LinkedChannelType
 */
class DescribePrimaryChannelSettings extends Shape
{
    /**
     * @param array{
     *     FollowingChannelArns?: list<string>|null,
     *     LinkedChannelType?: 'FOLLOWING_CHANNEL'|'PRIMARY_CHANNEL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
