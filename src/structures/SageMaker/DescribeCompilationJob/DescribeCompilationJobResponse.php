<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCompilationJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $CompilationJobName
 * @property string $CompilationJobArn
 * @property 'INPROGRESS'|'COMPLETED'|'FAILED'|'STARTING'|'STOPPING'|'STOPPED' $CompilationJobStatus
 * @property \Aws\Api\DateTimeResult|null $CompilationStartTime
 * @property \Aws\Api\DateTimeResult|null $CompilationEndTime
 * @property Shapes\StoppingCondition $StoppingCondition
 * @property string|null $InferenceImage
 * @property string|null $ModelPackageVersionArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $FailureReason
 * @property Shapes\ModelArtifacts $ModelArtifacts
 * @property Shapes\ModelDigests|null $ModelDigests
 * @property string $RoleArn
 * @property Shapes\InputConfig $InputConfig
 * @property Shapes\OutputConfig $OutputConfig
 * @property Shapes\NeoVpcConfig|null $VpcConfig
 * @property Shapes\DerivedInformation|null $DerivedInformation
 */
class DescribeCompilationJobResponse extends Response
{
}
