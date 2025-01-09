<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DescribeEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EvaluationId
 * @property string $MLModelId
 * @property string $EvaluationDataSourceId
 * @property string $InputDataLocationS3
 * @property string $CreatedByIamUser
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property string $Name
 * @property 'PENDING'|'INPROGRESS'|'FAILED'|'COMPLETED'|'DELETED' $Status
 * @property PerformanceMetrics $PerformanceMetrics
 * @property string $Message
 * @property int $ComputeTime
 * @property \Aws\Api\DateTimeResult $FinishedAt
 * @property \Aws\Api\DateTimeResult $StartedAt
 */
class Evaluation extends Shape
{
    /**
     * @param array{
     *     EvaluationId?: string,
     *     MLModelId?: string,
     *     EvaluationDataSourceId?: string,
     *     InputDataLocationS3?: string,
     *     CreatedByIamUser?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     Name?: string,
     *     Status?: 'PENDING'|'INPROGRESS'|'FAILED'|'COMPLETED'|'DELETED',
     *     PerformanceMetrics?: PerformanceMetrics,
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
