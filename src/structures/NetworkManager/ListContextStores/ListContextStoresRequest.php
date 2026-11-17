<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListContextStores;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $GlobalNetworkId
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class ListContextStoresRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId?: string|null,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
