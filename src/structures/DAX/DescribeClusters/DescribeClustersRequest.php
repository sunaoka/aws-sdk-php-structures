<?php

namespace Sunaoka\Aws\Structures\DAX\DescribeClusters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ClusterNames
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeClustersRequest extends Request
{
    /**
     * @param array{
     *     ClusterNames?: list<string>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
