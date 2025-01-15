<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEdgePackagingJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $EdgePackagingJobArn
 * @property string $EdgePackagingJobName
 * @property string|null $CompilationJobName
 * @property string|null $ModelName
 * @property string|null $ModelVersion
 * @property string|null $RoleArn
 * @property Shapes\EdgeOutputConfig|null $OutputConfig
 * @property string|null $ResourceKey
 * @property 'STARTING'|'INPROGRESS'|'COMPLETED'|'FAILED'|'STOPPING'|'STOPPED' $EdgePackagingJobStatus
 * @property string|null $EdgePackagingJobStatusMessage
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $ModelArtifact
 * @property string|null $ModelSignature
 * @property Shapes\EdgePresetDeploymentOutput|null $PresetDeploymentOutput
 */
class DescribeEdgePackagingJobResponse extends Response
{
}
