<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotFleetInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property string $SpotFleetRequestId
 */
class DescribeSpotFleetInstancesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     SpotFleetRequestId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
