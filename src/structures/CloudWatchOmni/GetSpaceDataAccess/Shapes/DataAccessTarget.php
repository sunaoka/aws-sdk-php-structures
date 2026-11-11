<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetSpaceDataAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $actions
 */
class DataAccessTarget extends Shape
{
    /**
     * @param array{actions: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
