<?php

namespace Sunaoka\Aws\Structures\Glue\ListSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 * @property array<string, string> $Tags
 * @property string $RequestOrigin
 */
class ListSessionsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>,
     *     Tags?: array<string, string>,
     *     RequestOrigin?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
