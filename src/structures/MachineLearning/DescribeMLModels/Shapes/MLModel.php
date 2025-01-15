<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DescribeMLModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MLModelId
 * @property string|null $TrainingDataSourceId
 * @property string|null $CreatedByIamUser
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property string|null $Name
 * @property 'PENDING'|'INPROGRESS'|'FAILED'|'COMPLETED'|'DELETED'|null $Status
 * @property int|null $SizeInBytes
 * @property RealtimeEndpointInfo|null $EndpointInfo
 * @property array<string, string>|null $TrainingParameters
 * @property string|null $InputDataLocationS3
 * @property 'sgd'|null $Algorithm
 * @property 'REGRESSION'|'BINARY'|'MULTICLASS'|null $MLModelType
 * @property float|null $ScoreThreshold
 * @property \Aws\Api\DateTimeResult|null $ScoreThresholdLastUpdatedAt
 * @property string|null $Message
 * @property int|null $ComputeTime
 * @property \Aws\Api\DateTimeResult|null $FinishedAt
 * @property \Aws\Api\DateTimeResult|null $StartedAt
 */
class MLModel extends Shape
{
    /**
     * @param array{
     *     MLModelId?: string|null,
     *     TrainingDataSourceId?: string|null,
     *     CreatedByIamUser?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     Name?: string|null,
     *     Status?: 'PENDING'|'INPROGRESS'|'FAILED'|'COMPLETED'|'DELETED'|null,
     *     SizeInBytes?: int|null,
     *     EndpointInfo?: RealtimeEndpointInfo|null,
     *     TrainingParameters?: array<string, string>|null,
     *     InputDataLocationS3?: string|null,
     *     Algorithm?: 'sgd'|null,
     *     MLModelType?: 'REGRESSION'|'BINARY'|'MULTICLASS'|null,
     *     ScoreThreshold?: float|null,
     *     ScoreThresholdLastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     Message?: string|null,
     *     ComputeTime?: int|null,
     *     FinishedAt?: \Aws\Api\DateTimeResult|null,
     *     StartedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
