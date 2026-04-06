<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $connectionId
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class DescribeConnectionsRequest extends Request
{
    /**
     * @param array{
     *     connectionId?: string|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
