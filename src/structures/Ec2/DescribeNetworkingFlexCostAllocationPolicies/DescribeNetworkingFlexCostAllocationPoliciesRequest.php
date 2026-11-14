<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkingFlexCostAllocationPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $FcaPolicyIds
 * @property int<5, 1000>|null $MaxResults
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $NextToken
 * @property bool|null $DryRun
 */
class DescribeNetworkingFlexCostAllocationPoliciesRequest extends Request
{
    /**
     * @param array{
     *     FcaPolicyIds?: list<string>|null,
     *     MaxResults?: int<5, 1000>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     NextToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
