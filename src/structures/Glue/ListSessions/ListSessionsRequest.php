<?php

namespace Sunaoka\Aws\Structures\Glue\ListSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property array<string, string> $Tags
 * @property string $RequestOrigin
 */
class ListSessionsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     Tags?: array<string, string>,
     *     RequestOrigin?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
