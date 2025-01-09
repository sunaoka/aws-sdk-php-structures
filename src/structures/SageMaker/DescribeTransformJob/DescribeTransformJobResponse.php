<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTransformJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TransformJobName
 * @property string $TransformJobArn
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $TransformJobStatus
 * @property string $FailureReason
 * @property string $ModelName
 * @property int $MaxConcurrentTransforms
 * @property Shapes\ModelClientConfig $ModelClientConfig
 * @property int $MaxPayloadInMB
 * @property 'MultiRecord'|'SingleRecord' $BatchStrategy
 * @property array<string, string> $Environment
 * @property Shapes\TransformInput $TransformInput
 * @property Shapes\TransformOutput $TransformOutput
 * @property Shapes\BatchDataCaptureConfig $DataCaptureConfig
 * @property Shapes\TransformResources $TransformResources
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $TransformStartTime
 * @property \Aws\Api\DateTimeResult $TransformEndTime
 * @property string $LabelingJobArn
 * @property string $AutoMLJobArn
 * @property Shapes\DataProcessing $DataProcessing
 * @property Shapes\ExperimentConfig $ExperimentConfig
 */
class DescribeTransformJobResponse extends Response
{
}
