<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeHosts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $HostIds
 * @property string $NextToken
 * @property int $MaxResults
 * @property list<Shapes\Filter> $Filter
 */
class DescribeHostsRequest extends Request
{
    /**
     * @param array{
     *     HostIds?: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     Filter?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
