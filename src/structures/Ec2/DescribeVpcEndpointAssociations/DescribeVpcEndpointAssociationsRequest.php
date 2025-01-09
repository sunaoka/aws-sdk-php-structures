<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpointAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<string> $VpcEndpointIds
 * @property list<Shapes\Filter> $Filters
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class DescribeVpcEndpointAssociationsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     VpcEndpointIds?: list<string>,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
