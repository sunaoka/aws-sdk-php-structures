<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeClusters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClusterName
 * @property int|null $MaxResults
 * @property string|null $NextToken
 * @property bool|null $ShowShardDetails
 */
class DescribeClustersRequest extends Request
{
    /**
     * @param array{
     *     ClusterName?: string|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null,
     *     ShowShardDetails?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
