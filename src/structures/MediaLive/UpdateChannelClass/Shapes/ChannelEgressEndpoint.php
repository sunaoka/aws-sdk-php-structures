<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceIp
 */
class ChannelEgressEndpoint extends Shape
{
    /**
     * @param array{SourceIp?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
