<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotFleetInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $SpotFleetRequestId
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 */
class DescribeSpotFleetInstancesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     SpotFleetRequestId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
