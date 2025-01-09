<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeGameSessionQueues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AllowedLocations
 */
class FilterConfiguration extends Shape
{
    /**
     * @param array{AllowedLocations?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
