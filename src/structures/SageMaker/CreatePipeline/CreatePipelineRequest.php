<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreatePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineName
 * @property string $PipelineDisplayName
 * @property string $PipelineDefinition
 * @property Shapes\PipelineDefinitionS3Location $PipelineDefinitionS3Location
 * @property string $PipelineDescription
 * @property string $ClientRequestToken
 * @property string $RoleArn
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\ParallelismConfiguration $ParallelismConfiguration
 */
class CreatePipelineRequest extends Request
{
    /**
     * @param array{
     *     PipelineName: string,
     *     PipelineDisplayName?: string,
     *     PipelineDefinition?: string,
     *     PipelineDefinitionS3Location?: Shapes\PipelineDefinitionS3Location,
     *     PipelineDescription?: string,
     *     ClientRequestToken: string,
     *     RoleArn: string,
     *     Tags?: list<Shapes\Tag>,
     *     ParallelismConfiguration?: Shapes\ParallelismConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
