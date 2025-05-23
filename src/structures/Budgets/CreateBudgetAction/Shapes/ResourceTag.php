<?php

namespace Sunaoka\Aws\Structures\Budgets\CreateBudgetAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string $Value
 */
class ResourceTag extends Shape
{
    /**
     * @param array{
     *     Key: string,
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
