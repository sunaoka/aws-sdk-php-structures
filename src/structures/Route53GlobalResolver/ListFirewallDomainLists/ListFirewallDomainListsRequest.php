<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\ListFirewallDomainLists;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $maxResults
 * @property string|null $nextToken
 * @property string|null $globalResolverId
 */
class ListFirewallDomainListsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int|null,
     *     nextToken?: string|null,
     *     globalResolverId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
