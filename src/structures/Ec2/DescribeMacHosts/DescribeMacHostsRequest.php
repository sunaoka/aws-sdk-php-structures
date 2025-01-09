<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeMacHosts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter> $Filters
 * @property list<string> $HostIds
 * @property int<5, 500> $MaxResults
 * @property string $NextToken
 */
class DescribeMacHostsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>,
     *     HostIds?: list<string>,
     *     MaxResults?: int<5, 500>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
