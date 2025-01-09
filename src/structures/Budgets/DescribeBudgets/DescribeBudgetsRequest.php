<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeBudgetsRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
