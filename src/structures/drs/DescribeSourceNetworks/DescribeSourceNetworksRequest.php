<?php

namespace Sunaoka\Aws\Structures\drs\DescribeSourceNetworks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DescribeSourceNetworksRequestFilters|null $filters
 * @property int<1, max>|null $maxResults
 * @property string|null $nextToken
 */
class DescribeSourceNetworksRequest extends Request
{
    /**
     * @param array{
     *     filters?: Shapes\DescribeSourceNetworksRequestFilters|null,
     *     maxResults?: int<1, max>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
