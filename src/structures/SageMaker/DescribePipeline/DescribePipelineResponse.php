<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribePipeline;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $PipelineArn
 * @property string|null $PipelineName
 * @property string|null $PipelineDisplayName
 * @property string|null $PipelineDefinition
 * @property string|null $PipelineDescription
 * @property string|null $RoleArn
 * @property 'Active'|'Deleting'|null $PipelineStatus
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property \Aws\Api\DateTimeResult|null $LastRunTime
 * @property Shapes\UserContext|null $CreatedBy
 * @property Shapes\UserContext|null $LastModifiedBy
 * @property Shapes\ParallelismConfiguration|null $ParallelismConfiguration
 * @property string|null $PipelineVersionDisplayName
 * @property string|null $PipelineVersionDescription
 */
class DescribePipelineResponse extends Response
{
}
