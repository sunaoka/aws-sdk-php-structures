<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeHosts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $HostIds
 * @property string|null $NextToken
 * @property int|null $MaxResults
 * @property list<Shapes\Filter>|null $Filter
 */
class DescribeHostsRequest extends Request
{
    /**
     * @param array{
     *     HostIds?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int|null,
     *     Filter?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
