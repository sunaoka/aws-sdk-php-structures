<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\ListNetworkResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<'ORDER'|'STATUS', list<string>> $filters
 * @property int $maxResults
 * @property string $networkArn
 * @property string $startToken
 */
class ListNetworkResourcesRequest extends Request
{
    /**
     * @param array{
     *     filters?: array<'ORDER'|'STATUS', list<string>>,
     *     maxResults?: int,
     *     networkArn: string,
     *     startToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
