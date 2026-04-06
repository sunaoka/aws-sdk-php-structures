<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListUsageTotals;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 500>|null $maxResults
 * @property string|null $nextToken
 * @property list<string>|null $accountIds
 */
class ListUsageTotalsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 500>|null,
     *     nextToken?: string|null,
     *     accountIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
