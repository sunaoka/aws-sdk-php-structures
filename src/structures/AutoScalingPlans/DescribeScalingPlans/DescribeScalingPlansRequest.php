<?php

namespace Sunaoka\Aws\Structures\AutoScalingPlans\DescribeScalingPlans;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ScalingPlanNames
 * @property int $ScalingPlanVersion
 * @property list<Shapes\ApplicationSource> $ApplicationSources
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeScalingPlansRequest extends Request
{
    /**
     * @param array{
     *     ScalingPlanNames?: list<string>,
     *     ScalingPlanVersion?: int,
     *     ApplicationSources?: list<Shapes\ApplicationSource>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
