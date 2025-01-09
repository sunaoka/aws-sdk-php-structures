<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BudgetName
 */
class BudgetDetail extends Shape
{
    /**
     * @param array{BudgetName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
