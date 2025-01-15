<?php

namespace Sunaoka\Aws\Structures\DAX\DescribeClusters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ClusterNames
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeClustersRequest extends Request
{
    /**
     * @param array{
     *     ClusterNames?: list<string>|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
