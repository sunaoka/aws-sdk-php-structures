<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProductAsAdmin\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BudgetName
 */
class BudgetDetail extends Shape
{
    /**
     * @param array{BudgetName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
