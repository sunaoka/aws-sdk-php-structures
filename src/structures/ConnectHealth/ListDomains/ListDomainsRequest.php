<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\ListDomains;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ACTIVE'|'DELETING'|'DELETED'|null $status
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListDomainsRequest extends Request
{
    /**
     * @param array{
     *     status?: 'ACTIVE'|'DELETING'|'DELETED'|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
