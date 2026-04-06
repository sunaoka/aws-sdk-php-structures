<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeHosts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filter
 * @property list<string>|null $HostIds
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeHostsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: list<Shapes\Filter>|null,
     *     HostIds?: list<string>|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
