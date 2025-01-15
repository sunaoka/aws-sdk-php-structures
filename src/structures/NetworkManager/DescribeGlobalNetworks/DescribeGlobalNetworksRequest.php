<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DescribeGlobalNetworks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $GlobalNetworkIds
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeGlobalNetworksRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkIds?: list<string>|null,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
