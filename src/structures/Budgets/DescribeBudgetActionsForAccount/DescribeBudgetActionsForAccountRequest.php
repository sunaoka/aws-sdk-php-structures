<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgetActionsForAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeBudgetActionsForAccountRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
