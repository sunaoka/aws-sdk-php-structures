<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransformJobName
 * @property string|null $TransformJobArn
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|null $TransformJobStatus
 * @property string|null $FailureReason
 * @property string|null $ModelName
 * @property int<0, max>|null $MaxConcurrentTransforms
 * @property ModelClientConfig|null $ModelClientConfig
 * @property int<0, max>|null $MaxPayloadInMB
 * @property 'MultiRecord'|'SingleRecord'|null $BatchStrategy
 * @property array<string, string>|null $Environment
 * @property TransformInput|null $TransformInput
 * @property TransformOutput|null $TransformOutput
 * @property BatchDataCaptureConfig|null $DataCaptureConfig
 * @property TransformResources|null $TransformResources
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $TransformStartTime
 * @property \Aws\Api\DateTimeResult|null $TransformEndTime
 * @property string|null $LabelingJobArn
 * @property string|null $AutoMLJobArn
 * @property DataProcessing|null $DataProcessing
 * @property ExperimentConfig|null $ExperimentConfig
 * @property list<Tag>|null $Tags
 */
class TransformJob extends Shape
{
    /**
     * @param array{
     *     TransformJobName?: string|null,
     *     TransformJobArn?: string|null,
     *     TransformJobStatus?: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|null,
     *     FailureReason?: string|null,
     *     ModelName?: string|null,
     *     MaxConcurrentTransforms?: int<0, max>|null,
     *     ModelClientConfig?: ModelClientConfig|null,
     *     MaxPayloadInMB?: int<0, max>|null,
     *     BatchStrategy?: 'MultiRecord'|'SingleRecord'|null,
     *     Environment?: array<string, string>|null,
     *     TransformInput?: TransformInput|null,
     *     TransformOutput?: TransformOutput|null,
     *     DataCaptureConfig?: BatchDataCaptureConfig|null,
     *     TransformResources?: TransformResources|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     TransformStartTime?: \Aws\Api\DateTimeResult|null,
     *     TransformEndTime?: \Aws\Api\DateTimeResult|null,
     *     LabelingJobArn?: string|null,
     *     AutoMLJobArn?: string|null,
     *     DataProcessing?: DataProcessing|null,
     *     ExperimentConfig?: ExperimentConfig|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
