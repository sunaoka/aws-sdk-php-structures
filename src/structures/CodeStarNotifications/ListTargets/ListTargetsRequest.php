<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\ListTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ListTargetsFilter> $Filters
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListTargetsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\ListTargetsFilter>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
