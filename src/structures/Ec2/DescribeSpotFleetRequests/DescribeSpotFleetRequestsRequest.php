<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotFleetRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property int|null $MaxResults
 * @property string|null $NextToken
 * @property list<string>|null $SpotFleetRequestIds
 */
class DescribeSpotFleetRequestsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null,
     *     SpotFleetRequestIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
