<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\ListOrders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<'STATUS'|'NETWORK_SITE', list<string>> $filters
 * @property int<1, 20> $maxResults
 * @property string $networkArn
 * @property string $startToken
 */
class ListOrdersRequest extends Request
{
    /**
     * @param array{
     *     filters?: array<'STATUS'|'NETWORK_SITE', list<string>>,
     *     maxResults?: int<1, 20>,
     *     networkArn: string,
     *     startToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
