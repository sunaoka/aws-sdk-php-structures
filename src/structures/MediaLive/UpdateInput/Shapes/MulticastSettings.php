<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MulticastSource>|null $Sources
 */
class MulticastSettings extends Shape
{
    /**
     * @param array{Sources?: list<MulticastSource>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
