<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreatePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineName
 * @property string|null $PipelineDisplayName
 * @property string|null $PipelineDefinition
 * @property Shapes\PipelineDefinitionS3Location|null $PipelineDefinitionS3Location
 * @property string|null $PipelineDescription
 * @property string $ClientRequestToken
 * @property string $RoleArn
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\ParallelismConfiguration|null $ParallelismConfiguration
 */
class CreatePipelineRequest extends Request
{
    /**
     * @param array{
     *     PipelineName: string,
     *     PipelineDisplayName?: string|null,
     *     PipelineDefinition?: string|null,
     *     PipelineDefinitionS3Location?: Shapes\PipelineDefinitionS3Location|null,
     *     PipelineDescription?: string|null,
     *     ClientRequestToken: string,
     *     RoleArn: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     ParallelismConfiguration?: Shapes\ParallelismConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
