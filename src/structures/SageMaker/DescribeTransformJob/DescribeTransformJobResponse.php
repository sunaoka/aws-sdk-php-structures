<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTransformJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TransformJobName
 * @property string $TransformJobArn
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $TransformJobStatus
 * @property string|null $FailureReason
 * @property string $ModelName
 * @property int<0, max>|null $MaxConcurrentTransforms
 * @property Shapes\ModelClientConfig|null $ModelClientConfig
 * @property int<0, max>|null $MaxPayloadInMB
 * @property 'MultiRecord'|'SingleRecord'|null $BatchStrategy
 * @property array<string, string>|null $Environment
 * @property Shapes\TransformInput $TransformInput
 * @property Shapes\TransformOutput|null $TransformOutput
 * @property Shapes\BatchDataCaptureConfig|null $DataCaptureConfig
 * @property Shapes\TransformResources $TransformResources
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult|null $TransformStartTime
 * @property \Aws\Api\DateTimeResult|null $TransformEndTime
 * @property string|null $LabelingJobArn
 * @property string|null $AutoMLJobArn
 * @property Shapes\DataProcessing|null $DataProcessing
 * @property Shapes\ExperimentConfig|null $ExperimentConfig
 */
class DescribeTransformJobResponse extends Response
{
}
