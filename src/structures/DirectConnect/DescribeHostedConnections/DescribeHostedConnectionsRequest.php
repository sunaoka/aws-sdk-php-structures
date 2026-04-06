<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeHostedConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectionId
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class DescribeHostedConnectionsRequest extends Request
{
    /**
     * @param array{
     *     connectionId: string,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
