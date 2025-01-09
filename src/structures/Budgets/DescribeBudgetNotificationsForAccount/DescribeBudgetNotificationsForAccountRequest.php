<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgetNotificationsForAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 */
class DescribeBudgetNotificationsForAccountRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
