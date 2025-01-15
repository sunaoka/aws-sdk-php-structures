<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotFleetInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $SpotFleetRequestId
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class DescribeSpotFleetInstancesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     SpotFleetRequestId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
