<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEdgePackagingJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $EdgePackagingJobArn
 * @property string $EdgePackagingJobName
 * @property string $CompilationJobName
 * @property string $ModelName
 * @property string $ModelVersion
 * @property string $RoleArn
 * @property Shapes\EdgeOutputConfig $OutputConfig
 * @property string $ResourceKey
 * @property 'STARTING'|'INPROGRESS'|'COMPLETED'|'FAILED'|'STOPPING'|'STOPPED' $EdgePackagingJobStatus
 * @property string $EdgePackagingJobStatusMessage
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $ModelArtifact
 * @property string $ModelSignature
 * @property Shapes\EdgePresetDeploymentOutput $PresetDeploymentOutput
 */
class DescribeEdgePackagingJobResponse extends Response
{
}
