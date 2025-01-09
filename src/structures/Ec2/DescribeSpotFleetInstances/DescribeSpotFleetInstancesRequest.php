<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotFleetInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $SpotFleetRequestId
 * @property string $NextToken
 * @property int $MaxResults
 */
class DescribeSpotFleetInstancesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     SpotFleetRequestId: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
