<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $UniqueKey
 */
class JoinKeyProperties extends Shape
{
    /**
     * @param array{UniqueKey?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
