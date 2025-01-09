<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpointServiceConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<string> $ServiceIds
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeVpcEndpointServiceConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     ServiceIds?: list<string>,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
