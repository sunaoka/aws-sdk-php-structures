<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotFleetRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<string>|null $SpotFleetRequestIds
 * @property string|null $NextToken
 * @property int|null $MaxResults
 */
class DescribeSpotFleetRequestsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     SpotFleetRequestIds?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
