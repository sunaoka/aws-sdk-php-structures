<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<OutputColumnNameOverride> $OutputColumnNameOverrides
 */
class JoinOperandProperties extends Shape
{
    /**
     * @param array{OutputColumnNameOverrides: list<OutputColumnNameOverride>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
