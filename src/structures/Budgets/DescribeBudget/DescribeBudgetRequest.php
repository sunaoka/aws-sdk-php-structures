<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $BudgetName
 * @property bool|null $ShowFilterExpression
 */
class DescribeBudgetRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     BudgetName: string,
     *     ShowFilterExpression?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
