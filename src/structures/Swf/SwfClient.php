<?php

namespace Sunaoka\Aws\Structures\Swf;

class SwfClient extends \Aws\Swf\SwfClient
{
    use CountClosedWorkflowExecutions\CountClosedWorkflowExecutionsTrait;
    use CountOpenWorkflowExecutions\CountOpenWorkflowExecutionsTrait;
    use CountPendingActivityTasks\CountPendingActivityTasksTrait;
    use CountPendingDecisionTasks\CountPendingDecisionTasksTrait;
    use DeleteActivityType\DeleteActivityTypeTrait;
    use DeleteWorkflowType\DeleteWorkflowTypeTrait;
    use DeprecateActivityType\DeprecateActivityTypeTrait;
    use DeprecateDomain\DeprecateDomainTrait;
    use DeprecateWorkflowType\DeprecateWorkflowTypeTrait;
    use DescribeActivityType\DescribeActivityTypeTrait;
    use DescribeDomain\DescribeDomainTrait;
    use DescribeWorkflowExecution\DescribeWorkflowExecutionTrait;
    use DescribeWorkflowType\DescribeWorkflowTypeTrait;
    use GetWorkflowExecutionHistory\GetWorkflowExecutionHistoryTrait;
    use ListActivityTypes\ListActivityTypesTrait;
    use ListClosedWorkflowExecutions\ListClosedWorkflowExecutionsTrait;
    use ListDomains\ListDomainsTrait;
    use ListOpenWorkflowExecutions\ListOpenWorkflowExecutionsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListWorkflowTypes\ListWorkflowTypesTrait;
    use PollForActivityTask\PollForActivityTaskTrait;
    use PollForDecisionTask\PollForDecisionTaskTrait;
    use RecordActivityTaskHeartbeat\RecordActivityTaskHeartbeatTrait;
    use RegisterActivityType\RegisterActivityTypeTrait;
    use RegisterDomain\RegisterDomainTrait;
    use RegisterWorkflowType\RegisterWorkflowTypeTrait;
    use RequestCancelWorkflowExecution\RequestCancelWorkflowExecutionTrait;
    use RespondActivityTaskCanceled\RespondActivityTaskCanceledTrait;
    use RespondActivityTaskCompleted\RespondActivityTaskCompletedTrait;
    use RespondActivityTaskFailed\RespondActivityTaskFailedTrait;
    use RespondDecisionTaskCompleted\RespondDecisionTaskCompletedTrait;
    use SignalWorkflowExecution\SignalWorkflowExecutionTrait;
    use StartWorkflowExecution\StartWorkflowExecutionTrait;
    use TagResource\TagResourceTrait;
    use TerminateWorkflowExecution\TerminateWorkflowExecutionTrait;
    use UndeprecateActivityType\UndeprecateActivityTypeTrait;
    use UndeprecateDomain\UndeprecateDomainTrait;
    use UndeprecateWorkflowType\UndeprecateWorkflowTypeTrait;
    use UntagResource\UntagResourceTrait;
}
