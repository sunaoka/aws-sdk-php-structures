<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\ListNetworkSites;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<'STATUS', list<string>>|null $filters
 * @property int<1, 20>|null $maxResults
 * @property string $networkArn
 * @property string|null $startToken
 */
class ListNetworkSitesRequest extends Request
{
    /**
     * @param array{
     *     filters?: array<'STATUS', list<string>>|null,
     *     maxResults?: int<1, 20>|null,
     *     networkArn: string,
     *     startToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
