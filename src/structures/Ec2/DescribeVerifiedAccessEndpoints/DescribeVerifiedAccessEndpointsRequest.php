<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVerifiedAccessEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $VerifiedAccessEndpointIds
 * @property string|null $VerifiedAccessInstanceId
 * @property string|null $VerifiedAccessGroupId
 * @property int<5, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\Filter>|null $Filters
 * @property bool|null $DryRun
 */
class DescribeVerifiedAccessEndpointsRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessEndpointIds?: list<string>|null,
     *     VerifiedAccessInstanceId?: string|null,
     *     VerifiedAccessGroupId?: string|null,
     *     MaxResults?: int<5, 1000>|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
