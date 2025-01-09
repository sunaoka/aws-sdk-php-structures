<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MulticastSource> $Sources
 */
class MulticastSettings extends Shape
{
    /**
     * @param array{Sources?: list<MulticastSource>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
