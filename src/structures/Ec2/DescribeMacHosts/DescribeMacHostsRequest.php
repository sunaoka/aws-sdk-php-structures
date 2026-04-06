<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeMacHosts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property list<string>|null $HostIds
 * @property int<5, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeMacHostsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     HostIds?: list<string>|null,
     *     MaxResults?: int<5, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
