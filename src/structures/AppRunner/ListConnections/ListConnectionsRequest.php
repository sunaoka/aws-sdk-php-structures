<?php

namespace Sunaoka\Aws\Structures\AppRunner\ListConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ConnectionName
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListConnectionsRequest extends Request
{
    /**
     * @param array{
     *     ConnectionName?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
