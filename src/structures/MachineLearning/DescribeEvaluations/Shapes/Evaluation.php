<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DescribeEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EvaluationId
 * @property string|null $MLModelId
 * @property string|null $EvaluationDataSourceId
 * @property string|null $InputDataLocationS3
 * @property string|null $CreatedByIamUser
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property string|null $Name
 * @property 'PENDING'|'INPROGRESS'|'FAILED'|'COMPLETED'|'DELETED'|null $Status
 * @property PerformanceMetrics|null $PerformanceMetrics
 * @property string|null $Message
 * @property int|null $ComputeTime
 * @property \Aws\Api\DateTimeResult|null $FinishedAt
 * @property \Aws\Api\DateTimeResult|null $StartedAt
 */
class Evaluation extends Shape
{
    /**
     * @param array{
     *     EvaluationId?: string|null,
     *     MLModelId?: string|null,
     *     EvaluationDataSourceId?: string|null,
     *     InputDataLocationS3?: string|null,
     *     CreatedByIamUser?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     Name?: string|null,
     *     Status?: 'PENDING'|'INPROGRESS'|'FAILED'|'COMPLETED'|'DELETED'|null,
     *     PerformanceMetrics?: PerformanceMetrics|null,
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
