<?php

namespace Sunaoka\Aws\Structures\Deadline\GetBudget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $budgetId
 */
class GetBudgetRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     budgetId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
