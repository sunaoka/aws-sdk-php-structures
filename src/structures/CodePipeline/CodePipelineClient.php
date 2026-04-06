<?php

namespace Sunaoka\Aws\Structures\CodePipeline;

class CodePipelineClient extends \Aws\CodePipeline\CodePipelineClient
{
    use AcknowledgeJob\AcknowledgeJobTrait;
    use AcknowledgeThirdPartyJob\AcknowledgeThirdPartyJobTrait;
    use CreateCustomActionType\CreateCustomActionTypeTrait;
    use CreatePipeline\CreatePipelineTrait;
    use DeleteCustomActionType\DeleteCustomActionTypeTrait;
    use DeletePipeline\DeletePipelineTrait;
    use DeleteWebhook\DeleteWebhookTrait;
    use DeregisterWebhookWithThirdParty\DeregisterWebhookWithThirdPartyTrait;
    use DisableStageTransition\DisableStageTransitionTrait;
    use EnableStageTransition\EnableStageTransitionTrait;
    use GetActionType\GetActionTypeTrait;
    use GetJobDetails\GetJobDetailsTrait;
    use GetPipeline\GetPipelineTrait;
    use GetPipelineExecution\GetPipelineExecutionTrait;
    use GetPipelineState\GetPipelineStateTrait;
    use GetThirdPartyJobDetails\GetThirdPartyJobDetailsTrait;
    use ListActionExecutions\ListActionExecutionsTrait;
    use ListActionTypes\ListActionTypesTrait;
    use ListDeployActionExecutionTargets\ListDeployActionExecutionTargetsTrait;
    use ListPipelineExecutions\ListPipelineExecutionsTrait;
    use ListPipelines\ListPipelinesTrait;
    use ListRuleExecutions\ListRuleExecutionsTrait;
    use ListRuleTypes\ListRuleTypesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListWebhooks\ListWebhooksTrait;
    use OverrideStageCondition\OverrideStageConditionTrait;
    use PollForJobs\PollForJobsTrait;
    use PollForThirdPartyJobs\PollForThirdPartyJobsTrait;
    use PutActionRevision\PutActionRevisionTrait;
    use PutApprovalResult\PutApprovalResultTrait;
    use PutJobFailureResult\PutJobFailureResultTrait;
    use PutJobSuccessResult\PutJobSuccessResultTrait;
    use PutThirdPartyJobFailureResult\PutThirdPartyJobFailureResultTrait;
    use PutThirdPartyJobSuccessResult\PutThirdPartyJobSuccessResultTrait;
    use PutWebhook\PutWebhookTrait;
    use RegisterWebhookWithThirdParty\RegisterWebhookWithThirdPartyTrait;
    use RetryStageExecution\RetryStageExecutionTrait;
    use RollbackStage\RollbackStageTrait;
    use StartPipelineExecution\StartPipelineExecutionTrait;
    use StopPipelineExecution\StopPipelineExecutionTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateActionType\UpdateActionTypeTrait;
    use UpdatePipeline\UpdatePipelineTrait;
}
