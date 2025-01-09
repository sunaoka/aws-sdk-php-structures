<?php

namespace Sunaoka\Aws\Structures\drs\ListLaunchActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $actionIds
 */
class LaunchActionsRequestFilters extends Shape
{
    /**
     * @param array{actionIds?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
