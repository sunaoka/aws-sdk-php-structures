<?php

namespace Sunaoka\Aws\Structures\ConnectCases\ListDomains;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 10>|null $maxResults
 * @property string|null $nextToken
 */
class ListDomainsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 10>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
