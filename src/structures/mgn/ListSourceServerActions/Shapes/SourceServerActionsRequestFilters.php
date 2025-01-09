<?php

namespace Sunaoka\Aws\Structures\mgn\ListSourceServerActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $actionIDs
 */
class SourceServerActionsRequestFilters extends Shape
{
    /**
     * @param array{actionIDs?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
