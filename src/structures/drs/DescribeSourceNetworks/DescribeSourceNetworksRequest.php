<?php

namespace Sunaoka\Aws\Structures\drs\DescribeSourceNetworks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DescribeSourceNetworksRequestFilters $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class DescribeSourceNetworksRequest extends Request
{
    /**
     * @param array{
     *     filters?: Shapes\DescribeSourceNetworksRequestFilters,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
