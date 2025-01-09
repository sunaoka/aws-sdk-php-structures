<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVerifiedAccessEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $VerifiedAccessEndpointIds
 * @property string $VerifiedAccessInstanceId
 * @property string $VerifiedAccessGroupId
 * @property int $MaxResults
 * @property string $NextToken
 * @property list<Shapes\Filter> $Filters
 * @property bool $DryRun
 */
class DescribeVerifiedAccessEndpointsRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessEndpointIds?: list<string>,
     *     VerifiedAccessInstanceId?: string,
     *     VerifiedAccessGroupId?: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     Filters?: list<Shapes\Filter>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
