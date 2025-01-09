<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpointServices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<string> $ServiceNames
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 * @property list<string> $ServiceRegions
 */
class DescribeVpcEndpointServicesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     ServiceNames?: list<string>,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     ServiceRegions?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
