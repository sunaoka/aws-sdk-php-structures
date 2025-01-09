<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdatePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineName
 * @property string $PipelineDisplayName
 * @property string $PipelineDefinition
 * @property Shapes\PipelineDefinitionS3Location $PipelineDefinitionS3Location
 * @property string $PipelineDescription
 * @property string $RoleArn
 * @property Shapes\ParallelismConfiguration $ParallelismConfiguration
 */
class UpdatePipelineRequest extends Request
{
    /**
     * @param array{
     *     PipelineName: string,
     *     PipelineDisplayName?: string,
     *     PipelineDefinition?: string,
     *     PipelineDefinitionS3Location?: Shapes\PipelineDefinitionS3Location,
     *     PipelineDescription?: string,
     *     RoleArn?: string,
     *     ParallelismConfiguration?: Shapes\ParallelismConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
