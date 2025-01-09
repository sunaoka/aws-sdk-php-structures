<?php

namespace Sunaoka\Aws\Structures\Deadline\DeleteBudget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $budgetId
 */
class DeleteBudgetRequest extends Request
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
