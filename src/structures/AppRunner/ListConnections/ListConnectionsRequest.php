<?php

namespace Sunaoka\Aws\Structures\AppRunner\ListConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectionName
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListConnectionsRequest extends Request
{
    /**
     * @param array{
     *     ConnectionName?: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
