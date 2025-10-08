<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch;

class ARCRegionSwitchClient extends \Aws\ARCRegionSwitch\ARCRegionSwitchClient
{
    use ApprovePlanExecutionStep\ApprovePlanExecutionStepTrait;
    use CancelPlanExecution\CancelPlanExecutionTrait;
    use CreatePlan\CreatePlanTrait;
    use DeletePlan\DeletePlanTrait;
    use GetPlan\GetPlanTrait;
    use GetPlanEvaluationStatus\GetPlanEvaluationStatusTrait;
    use GetPlanExecution\GetPlanExecutionTrait;
    use GetPlanInRegion\GetPlanInRegionTrait;
    use ListPlanExecutionEvents\ListPlanExecutionEventsTrait;
    use ListPlanExecutions\ListPlanExecutionsTrait;
    use ListPlans\ListPlansTrait;
    use ListPlansInRegion\ListPlansInRegionTrait;
    use ListRoute53HealthChecks\ListRoute53HealthChecksTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartPlanExecution\StartPlanExecutionTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdatePlan\UpdatePlanTrait;
    use UpdatePlanExecution\UpdatePlanExecutionTrait;
    use UpdatePlanExecutionStep\UpdatePlanExecutionStepTrait;
}
