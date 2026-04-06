<?php

namespace Sunaoka\Aws\Structures\SimpleDBv2\ListExports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $domainName
 * @property int<1, max>|null $maxResults
 * @property string|null $nextToken
 */
class ListExportsRequest extends Request
{
    /**
     * @param array{
     *     domainName?: string|null,
     *     maxResults?: int<1, max>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
