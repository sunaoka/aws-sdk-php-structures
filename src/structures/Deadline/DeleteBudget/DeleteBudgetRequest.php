<?php

namespace Sunaoka\Aws\Structures\Deadline\DeleteBudget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $budgetId
 * @property string $farmId
 */
class DeleteBudgetRequest extends Request
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
