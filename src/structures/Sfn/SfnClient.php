<?php

namespace Sunaoka\Aws\Structures\Sfn;

class SfnClient extends \Aws\Sfn\SfnClient
{
    use CreateActivity\CreateActivityTrait;
    use CreateStateMachine\CreateStateMachineTrait;
    use CreateStateMachineAlias\CreateStateMachineAliasTrait;
    use DeleteActivity\DeleteActivityTrait;
    use DeleteStateMachine\DeleteStateMachineTrait;
    use DeleteStateMachineAlias\DeleteStateMachineAliasTrait;
    use DeleteStateMachineVersion\DeleteStateMachineVersionTrait;
    use DescribeActivity\DescribeActivityTrait;
    use DescribeExecution\DescribeExecutionTrait;
    use DescribeMapRun\DescribeMapRunTrait;
    use DescribeStateMachine\DescribeStateMachineTrait;
    use DescribeStateMachineAlias\DescribeStateMachineAliasTrait;
    use DescribeStateMachineForExecution\DescribeStateMachineForExecutionTrait;
    use GetActivityTask\GetActivityTaskTrait;
    use GetExecutionHistory\GetExecutionHistoryTrait;
    use ListActivities\ListActivitiesTrait;
    use ListExecutions\ListExecutionsTrait;
    use ListMapRuns\ListMapRunsTrait;
    use ListStateMachineAliases\ListStateMachineAliasesTrait;
    use ListStateMachineVersions\ListStateMachineVersionsTrait;
    use ListStateMachines\ListStateMachinesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PublishStateMachineVersion\PublishStateMachineVersionTrait;
    use RedriveExecution\RedriveExecutionTrait;
    use SendTaskFailure\SendTaskFailureTrait;
    use SendTaskHeartbeat\SendTaskHeartbeatTrait;
    use SendTaskSuccess\SendTaskSuccessTrait;
    use StartExecution\StartExecutionTrait;
    use StartSyncExecution\StartSyncExecutionTrait;
    use StopExecution\StopExecutionTrait;
    use TagResource\TagResourceTrait;
    use TestState\TestStateTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateMapRun\UpdateMapRunTrait;
    use UpdateStateMachine\UpdateStateMachineTrait;
    use UpdateStateMachineAlias\UpdateStateMachineAliasTrait;
    use ValidateStateMachineDefinition\ValidateStateMachineDefinitionTrait;
}
