<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\ListNetworks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<'STATUS', list<string>> $filters
 * @property int $maxResults
 * @property string $startToken
 */
class ListNetworksRequest extends Request
{
    /**
     * @param array{
     *     filters?: array<'STATUS', list<string>>,
     *     maxResults?: int,
     *     startToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
