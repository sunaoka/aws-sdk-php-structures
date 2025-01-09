<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgetActionsForAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class DescribeBudgetActionsForAccountRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
