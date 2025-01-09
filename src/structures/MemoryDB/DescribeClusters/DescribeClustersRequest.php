<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeClusters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property int $MaxResults
 * @property string $NextToken
 * @property bool $ShowShardDetails
 */
class DescribeClustersRequest extends Request
{
    /**
     * @param array{
     *     ClusterName?: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     ShowShardDetails?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
