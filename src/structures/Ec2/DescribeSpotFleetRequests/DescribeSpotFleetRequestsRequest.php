<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotFleetRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<string> $SpotFleetRequestIds
 * @property string $NextToken
 * @property int $MaxResults
 */
class DescribeSpotFleetRequestsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     SpotFleetRequestIds?: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
