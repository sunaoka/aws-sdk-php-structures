<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FOLLOWING_CHANNEL'|'PRIMARY_CHANNEL'|null $LinkedChannelType
 */
class PrimaryChannelSettings extends Shape
{
    /**
     * @param array{LinkedChannelType?: 'FOLLOWING_CHANNEL'|'PRIMARY_CHANNEL'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
