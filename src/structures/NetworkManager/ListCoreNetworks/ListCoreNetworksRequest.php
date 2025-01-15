<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListCoreNetworks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class ListCoreNetworksRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
