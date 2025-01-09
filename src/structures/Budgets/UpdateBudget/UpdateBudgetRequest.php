<?php

namespace Sunaoka\Aws\Structures\Budgets\UpdateBudget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property Shapes\Budget $NewBudget
 */
class UpdateBudgetRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     NewBudget: Shapes\Budget
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
