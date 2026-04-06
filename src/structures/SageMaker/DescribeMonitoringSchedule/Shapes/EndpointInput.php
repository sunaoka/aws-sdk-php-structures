<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeMonitoringSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointName
 * @property string $LocalPath
 * @property 'Pipe'|'File'|null $S3InputMode
 * @property 'FullyReplicated'|'ShardedByS3Key'|null $S3DataDistributionType
 * @property string|null $FeaturesAttribute
 * @property string|null $InferenceAttribute
 * @property string|null $ProbabilityAttribute
 * @property double|null $ProbabilityThresholdAttribute
 * @property string|null $StartTimeOffset
 * @property string|null $EndTimeOffset
 * @property string|null $ExcludeFeaturesAttribute
 */
class EndpointInput extends Shape
{
    /**
     * @param array{
     *     EndpointName: string,
     *     LocalPath: string,
     *     S3InputMode?: 'Pipe'|'File'|null,
     *     S3DataDistributionType?: 'FullyReplicated'|'ShardedByS3Key'|null,
     *     FeaturesAttribute?: string|null,
     *     InferenceAttribute?: string|null,
     *     ProbabilityAttribute?: string|null,
     *     ProbabilityThresholdAttribute?: double|null,
     *     StartTimeOffset?: string|null,
     *     EndTimeOffset?: string|null,
     *     ExcludeFeaturesAttribute?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
