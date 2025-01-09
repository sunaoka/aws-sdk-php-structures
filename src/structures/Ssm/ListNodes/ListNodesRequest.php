<?php

namespace Sunaoka\Aws\Structures\Ssm\ListNodes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SyncName
 * @property list<Shapes\NodeFilter> $Filters
 * @property string $NextToken
 * @property int<1, 50> $MaxResults
 */
class ListNodesRequest extends Request
{
    /**
     * @param array{
     *     SyncName?: string,
     *     Filters?: list<Shapes\NodeFilter>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 50>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
