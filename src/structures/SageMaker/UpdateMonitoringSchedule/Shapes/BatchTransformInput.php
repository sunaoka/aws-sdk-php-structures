<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateMonitoringSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataCapturedDestinationS3Uri
 * @property MonitoringDatasetFormat $DatasetFormat
 * @property string $LocalPath
 * @property 'Pipe'|'File' $S3InputMode
 * @property 'FullyReplicated'|'ShardedByS3Key' $S3DataDistributionType
 * @property string $FeaturesAttribute
 * @property string $InferenceAttribute
 * @property string $ProbabilityAttribute
 * @property double $ProbabilityThresholdAttribute
 * @property string $StartTimeOffset
 * @property string $EndTimeOffset
 * @property string $ExcludeFeaturesAttribute
 */
class BatchTransformInput extends Shape
{
    /**
     * @param array{
     *     DataCapturedDestinationS3Uri: string,
     *     DatasetFormat: MonitoringDatasetFormat,
     *     LocalPath: string,
     *     S3InputMode?: 'Pipe'|'File',
     *     S3DataDistributionType?: 'FullyReplicated'|'ShardedByS3Key',
     *     FeaturesAttribute?: string,
     *     InferenceAttribute?: string,
     *     ProbabilityAttribute?: string,
     *     ProbabilityThresholdAttribute?: double,
     *     StartTimeOffset?: string,
     *     EndTimeOffset?: string,
     *     ExcludeFeaturesAttribute?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
