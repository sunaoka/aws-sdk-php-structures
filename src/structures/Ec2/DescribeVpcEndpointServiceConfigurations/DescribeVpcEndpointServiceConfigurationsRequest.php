<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpointServiceConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<string>|null $ServiceIds
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeVpcEndpointServiceConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     ServiceIds?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
