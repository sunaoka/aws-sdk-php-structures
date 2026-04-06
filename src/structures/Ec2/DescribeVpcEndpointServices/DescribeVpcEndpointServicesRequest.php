<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpointServices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<string>|null $ServiceNames
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxResults
 * @property string|null $NextToken
 * @property list<string>|null $ServiceRegions
 */
class DescribeVpcEndpointServicesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     ServiceNames?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null,
     *     ServiceRegions?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
