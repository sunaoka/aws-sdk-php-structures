<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeTrafficSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property string $TrafficSourceType
 * @property string $NextToken
 * @property int $MaxRecords
 */
class DescribeTrafficSourcesRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     TrafficSourceType?: string,
     *     NextToken?: string,
     *     MaxRecords?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
