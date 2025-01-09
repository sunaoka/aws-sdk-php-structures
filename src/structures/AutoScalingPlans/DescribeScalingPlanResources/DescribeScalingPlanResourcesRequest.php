<?php

namespace Sunaoka\Aws\Structures\AutoScalingPlans\DescribeScalingPlanResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ScalingPlanName
 * @property int $ScalingPlanVersion
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeScalingPlanResourcesRequest extends Request
{
    /**
     * @param array{
     *     ScalingPlanName: string,
     *     ScalingPlanVersion: int,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
