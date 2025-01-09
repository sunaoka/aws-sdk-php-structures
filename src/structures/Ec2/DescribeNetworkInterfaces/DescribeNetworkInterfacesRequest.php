<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInterfaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property bool $DryRun
 * @property list<string> $NetworkInterfaceIds
 * @property list<Shapes\Filter> $Filters
 */
class DescribeNetworkInterfacesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     DryRun?: bool,
     *     NetworkInterfaceIds?: list<string>,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
