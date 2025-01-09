<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransformJobName
 * @property string $TransformJobArn
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $TransformJobStatus
 * @property string $FailureReason
 * @property string $ModelName
 * @property int $MaxConcurrentTransforms
 * @property ModelClientConfig $ModelClientConfig
 * @property int $MaxPayloadInMB
 * @property 'MultiRecord'|'SingleRecord' $BatchStrategy
 * @property array<string, string> $Environment
 * @property TransformInput $TransformInput
 * @property TransformOutput $TransformOutput
 * @property BatchDataCaptureConfig $DataCaptureConfig
 * @property TransformResources $TransformResources
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $TransformStartTime
 * @property \Aws\Api\DateTimeResult $TransformEndTime
 * @property string $LabelingJobArn
 * @property string $AutoMLJobArn
 * @property DataProcessing $DataProcessing
 * @property ExperimentConfig $ExperimentConfig
 * @property list<Tag> $Tags
 */
class TransformJob extends Shape
{
    /**
     * @param array{
     *     TransformJobName?: string,
     *     TransformJobArn?: string,
     *     TransformJobStatus?: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped',
     *     FailureReason?: string,
     *     ModelName?: string,
     *     MaxConcurrentTransforms?: int,
     *     ModelClientConfig?: ModelClientConfig,
     *     MaxPayloadInMB?: int,
     *     BatchStrategy?: 'MultiRecord'|'SingleRecord',
     *     Environment?: array<string, string>,
     *     TransformInput?: TransformInput,
     *     TransformOutput?: TransformOutput,
     *     DataCaptureConfig?: BatchDataCaptureConfig,
     *     TransformResources?: TransformResources,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     TransformStartTime?: \Aws\Api\DateTimeResult,
     *     TransformEndTime?: \Aws\Api\DateTimeResult,
     *     LabelingJobArn?: string,
     *     AutoMLJobArn?: string,
     *     DataProcessing?: DataProcessing,
     *     ExperimentConfig?: ExperimentConfig,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
