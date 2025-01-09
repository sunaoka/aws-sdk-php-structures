<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeInstanceRefreshes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property list<string> $InstanceRefreshIds
 * @property string $NextToken
 * @property int $MaxRecords
 */
class DescribeInstanceRefreshesRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     InstanceRefreshIds?: list<string>,
     *     NextToken?: string,
     *     MaxRecords?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
