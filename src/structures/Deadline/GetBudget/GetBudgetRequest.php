<?php

namespace Sunaoka\Aws\Structures\Deadline\GetBudget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $budgetId
 * @property string $farmId
 */
class GetBudgetRequest extends Request
{
    /**
     * @param array{
     *     budgetId: string,
     *     farmId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
