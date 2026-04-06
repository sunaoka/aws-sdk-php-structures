<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling;

class ApplicationAutoScalingClient extends \Aws\ApplicationAutoScaling\ApplicationAutoScalingClient
{
    use DeleteScalingPolicy\DeleteScalingPolicyTrait;
    use DeleteScheduledAction\DeleteScheduledActionTrait;
    use DeregisterScalableTarget\DeregisterScalableTargetTrait;
    use DescribeScalableTargets\DescribeScalableTargetsTrait;
    use DescribeScalingActivities\DescribeScalingActivitiesTrait;
    use DescribeScalingPolicies\DescribeScalingPoliciesTrait;
    use DescribeScheduledActions\DescribeScheduledActionsTrait;
    use GetPredictiveScalingForecast\GetPredictiveScalingForecastTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutScalingPolicy\PutScalingPolicyTrait;
    use PutScheduledAction\PutScheduledActionTrait;
    use RegisterScalableTarget\RegisterScalableTargetTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
