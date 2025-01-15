<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\DescribeApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $LaunchCommands
 */
class LaunchOverrides extends Shape
{
    /**
     * @param array{LaunchCommands?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
