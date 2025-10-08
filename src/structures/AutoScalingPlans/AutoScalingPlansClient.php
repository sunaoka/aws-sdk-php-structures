<?php

namespace Sunaoka\Aws\Structures\AutoScalingPlans;

class AutoScalingPlansClient extends \Aws\AutoScalingPlans\AutoScalingPlansClient
{
    use CreateScalingPlan\CreateScalingPlanTrait;
    use DeleteScalingPlan\DeleteScalingPlanTrait;
    use DescribeScalingPlanResources\DescribeScalingPlanResourcesTrait;
    use DescribeScalingPlans\DescribeScalingPlansTrait;
    use GetScalingPlanResourceForecastData\GetScalingPlanResourceForecastDataTrait;
    use UpdateScalingPlan\UpdateScalingPlanTrait;
}
