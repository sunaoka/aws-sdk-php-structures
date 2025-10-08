<?php

namespace Sunaoka\Aws\Structures\DataPipeline;

class DataPipelineClient extends \Aws\DataPipeline\DataPipelineClient
{
    use ActivatePipeline\ActivatePipelineTrait;
    use AddTags\AddTagsTrait;
    use CreatePipeline\CreatePipelineTrait;
    use DeactivatePipeline\DeactivatePipelineTrait;
    use DeletePipeline\DeletePipelineTrait;
    use DescribeObjects\DescribeObjectsTrait;
    use DescribePipelines\DescribePipelinesTrait;
    use EvaluateExpression\EvaluateExpressionTrait;
    use GetPipelineDefinition\GetPipelineDefinitionTrait;
    use ListPipelines\ListPipelinesTrait;
    use PollForTask\PollForTaskTrait;
    use PutPipelineDefinition\PutPipelineDefinitionTrait;
    use QueryObjects\QueryObjectsTrait;
    use RemoveTags\RemoveTagsTrait;
    use ReportTaskProgress\ReportTaskProgressTrait;
    use ReportTaskRunnerHeartbeat\ReportTaskRunnerHeartbeatTrait;
    use SetStatus\SetStatusTrait;
    use SetTaskStatus\SetTaskStatusTrait;
    use ValidatePipelineDefinition\ValidatePipelineDefinitionTrait;
}
