<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeInstanceRefreshes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property list<string>|null $InstanceRefreshIds
 * @property string|null $NextToken
 * @property int|null $MaxRecords
 */
class DescribeInstanceRefreshesRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     InstanceRefreshIds?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxRecords?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
