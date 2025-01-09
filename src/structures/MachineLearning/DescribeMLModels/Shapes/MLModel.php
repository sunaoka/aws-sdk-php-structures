<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DescribeMLModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MLModelId
 * @property string $TrainingDataSourceId
 * @property string $CreatedByIamUser
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property string $Name
 * @property 'PENDING'|'INPROGRESS'|'FAILED'|'COMPLETED'|'DELETED' $Status
 * @property int $SizeInBytes
 * @property RealtimeEndpointInfo $EndpointInfo
 * @property array<string, string> $TrainingParameters
 * @property string $InputDataLocationS3
 * @property 'sgd' $Algorithm
 * @property 'REGRESSION'|'BINARY'|'MULTICLASS' $MLModelType
 * @property float $ScoreThreshold
 * @property \Aws\Api\DateTimeResult $ScoreThresholdLastUpdatedAt
 * @property string $Message
 * @property int $ComputeTime
 * @property \Aws\Api\DateTimeResult $FinishedAt
 * @property \Aws\Api\DateTimeResult $StartedAt
 */
class MLModel extends Shape
{
    /**
     * @param array{
     *     MLModelId?: string,
     *     TrainingDataSourceId?: string,
     *     CreatedByIamUser?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     Name?: string,
     *     Status?: 'PENDING'|'INPROGRESS'|'FAILED'|'COMPLETED'|'DELETED',
     *     SizeInBytes?: int,
     *     EndpointInfo?: RealtimeEndpointInfo,
     *     TrainingParameters?: array<string, string>,
     *     InputDataLocationS3?: string,
     *     Algorithm?: 'sgd',
     *     MLModelType?: 'REGRESSION'|'BINARY'|'MULTICLASS',
     *     ScoreThreshold?: float,
     *     ScoreThresholdLastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     Message?: string,
     *     ComputeTime?: int,
     *     FinishedAt?: \Aws\Api\DateTimeResult,
     *     StartedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
