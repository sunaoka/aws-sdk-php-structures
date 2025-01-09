<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgetActionHistories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Message
 * @property Action $Action
 */
class ActionHistoryDetails extends Shape
{
    /**
     * @param array{
     *     Message: string,
     *     Action: Action
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
