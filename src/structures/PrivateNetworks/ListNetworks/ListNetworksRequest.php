<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\ListNetworks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<'STATUS', list<string>> $filters
 * @property int<1, 20> $maxResults
 * @property string $startToken
 */
class ListNetworksRequest extends Request
{
    /**
     * @param array{
     *     filters?: array<'STATUS', list<string>>,
     *     maxResults?: int<1, 20>,
     *     startToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
