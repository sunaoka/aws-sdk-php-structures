<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\ListTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ListTargetsFilter>|null $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListTargetsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\ListTargetsFilter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
