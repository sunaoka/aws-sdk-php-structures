<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\DescribeApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $LaunchCommands
 */
class LaunchOverrides extends Shape
{
    /**
     * @param array{LaunchCommands?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
