<?php

namespace Sunaoka\Aws\Structures\Budgets\UpdateBudget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Amount
 * @property string $Unit
 */
class Spend extends Shape
{
    /**
     * @param array{
     *     Amount: string,
     *     Unit: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
