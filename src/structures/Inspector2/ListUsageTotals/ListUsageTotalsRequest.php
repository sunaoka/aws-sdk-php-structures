<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListUsageTotals;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $accountIds
 * @property int<1, 500>|null $maxResults
 * @property string|null $nextToken
 */
class ListUsageTotalsRequest extends Request
{
    /**
     * @param array{
     *     accountIds?: list<string>|null,
     *     maxResults?: int<1, 500>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
