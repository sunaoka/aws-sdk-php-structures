<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeTrafficSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property string|null $TrafficSourceType
 * @property string|null $NextToken
 * @property int|null $MaxRecords
 */
class DescribeTrafficSourcesRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     TrafficSourceType?: string|null,
     *     NextToken?: string|null,
     *     MaxRecords?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
