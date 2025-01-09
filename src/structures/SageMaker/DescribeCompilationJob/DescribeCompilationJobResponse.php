<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCompilationJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $CompilationJobName
 * @property string $CompilationJobArn
 * @property 'INPROGRESS'|'COMPLETED'|'FAILED'|'STARTING'|'STOPPING'|'STOPPED' $CompilationJobStatus
 * @property \Aws\Api\DateTimeResult $CompilationStartTime
 * @property \Aws\Api\DateTimeResult $CompilationEndTime
 * @property Shapes\StoppingCondition $StoppingCondition
 * @property string $InferenceImage
 * @property string $ModelPackageVersionArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $FailureReason
 * @property Shapes\ModelArtifacts $ModelArtifacts
 * @property Shapes\ModelDigests $ModelDigests
 * @property string $RoleArn
 * @property Shapes\InputConfig $InputConfig
 * @property Shapes\OutputConfig $OutputConfig
 * @property Shapes\NeoVpcConfig $VpcConfig
 * @property Shapes\DerivedInformation $DerivedInformation
 */
class DescribeCompilationJobResponse extends Response
{
}
