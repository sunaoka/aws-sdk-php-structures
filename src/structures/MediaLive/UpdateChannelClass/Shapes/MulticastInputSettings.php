<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceIpAddress
 */
class MulticastInputSettings extends Shape
{
    /**
     * @param array{SourceIpAddress?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
