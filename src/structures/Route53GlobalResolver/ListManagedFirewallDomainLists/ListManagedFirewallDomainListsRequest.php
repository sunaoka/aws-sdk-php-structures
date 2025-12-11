<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\ListManagedFirewallDomainLists;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $maxResults
 * @property string|null $nextToken
 * @property string $managedFirewallDomainListType
 */
class ListManagedFirewallDomainListsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int|null,
     *     nextToken?: string|null,
     *     managedFirewallDomainListType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
