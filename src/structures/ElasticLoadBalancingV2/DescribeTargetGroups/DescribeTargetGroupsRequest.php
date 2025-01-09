<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTargetGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerArn
 * @property list<string> $TargetGroupArns
 * @property list<string> $Names
 * @property string $Marker
 * @property int $PageSize
 */
class DescribeTargetGroupsRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerArn?: string,
     *     TargetGroupArns?: list<string>,
     *     Names?: list<string>,
     *     Marker?: string,
     *     PageSize?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
