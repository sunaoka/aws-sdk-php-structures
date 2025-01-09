<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DescribeGlobalNetworks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $GlobalNetworkIds
 * @property int<1, 500> $MaxResults
 * @property string $NextToken
 */
class DescribeGlobalNetworksRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkIds?: list<string>,
     *     MaxResults?: int<1, 500>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
