<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AvailSettings|null $AvailSettings
 */
class AvailConfiguration extends Shape
{
    /**
     * @param array{AvailSettings?: AvailSettings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
