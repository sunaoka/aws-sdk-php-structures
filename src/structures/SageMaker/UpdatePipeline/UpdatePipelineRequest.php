<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdatePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineName
 * @property string|null $PipelineDisplayName
 * @property string|null $PipelineDefinition
 * @property Shapes\PipelineDefinitionS3Location|null $PipelineDefinitionS3Location
 * @property string|null $PipelineDescription
 * @property string|null $RoleArn
 * @property Shapes\ParallelismConfiguration|null $ParallelismConfiguration
 */
class UpdatePipelineRequest extends Request
{
    /**
     * @param array{
     *     PipelineName: string,
     *     PipelineDisplayName?: string|null,
     *     PipelineDefinition?: string|null,
     *     PipelineDefinitionS3Location?: Shapes\PipelineDefinitionS3Location|null,
     *     PipelineDescription?: string|null,
     *     RoleArn?: string|null,
     *     ParallelismConfiguration?: Shapes\ParallelismConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
