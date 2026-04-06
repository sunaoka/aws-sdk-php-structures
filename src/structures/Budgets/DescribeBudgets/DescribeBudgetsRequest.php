<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeBudgetsRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
