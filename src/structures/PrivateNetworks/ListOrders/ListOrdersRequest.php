<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\ListOrders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<'STATUS'|'NETWORK_SITE', list<string>> $filters
 * @property int $maxResults
 * @property string $networkArn
 * @property string $startToken
 */
class ListOrdersRequest extends Request
{
    /**
     * @param array{
     *     filters?: array<'STATUS'|'NETWORK_SITE', list<string>>,
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
