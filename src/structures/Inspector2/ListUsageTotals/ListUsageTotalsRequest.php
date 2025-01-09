<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListUsageTotals;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $accountIds
 * @property int<1, 500> $maxResults
 * @property string $nextToken
 */
class ListUsageTotalsRequest extends Request
{
    /**
     * @param array{
     *     accountIds?: list<string>,
     *     maxResults?: int<1, 500>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
