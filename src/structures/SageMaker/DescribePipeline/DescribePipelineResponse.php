<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribePipeline;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $PipelineArn
 * @property string $PipelineName
 * @property string $PipelineDisplayName
 * @property string $PipelineDefinition
 * @property string $PipelineDescription
 * @property string $RoleArn
 * @property 'Active'|'Deleting' $PipelineStatus
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property \Aws\Api\DateTimeResult $LastRunTime
 * @property Shapes\UserContext $CreatedBy
 * @property Shapes\UserContext $LastModifiedBy
 * @property Shapes\ParallelismConfiguration $ParallelismConfiguration
 */
class DescribePipelineResponse extends Response
{
}
