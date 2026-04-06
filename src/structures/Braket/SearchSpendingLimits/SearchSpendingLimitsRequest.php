<?php

namespace Sunaoka\Aws\Structures\Braket\SearchSpendingLimits;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property list<Shapes\SearchSpendingLimitsFilter>|null $filters
 */
class SearchSpendingLimitsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     filters?: list<Shapes\SearchSpendingLimitsFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
