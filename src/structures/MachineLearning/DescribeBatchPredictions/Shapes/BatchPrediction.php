<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DescribeBatchPredictions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BatchPredictionId
 * @property string|null $MLModelId
 * @property string|null $BatchPredictionDataSourceId
 * @property string|null $InputDataLocationS3
 * @property string|null $CreatedByIamUser
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property string|null $Name
 * @property 'PENDING'|'INPROGRESS'|'FAILED'|'COMPLETED'|'DELETED'|null $Status
 * @property string|null $OutputUri
 * @property string|null $Message
 * @property int|null $ComputeTime
 * @property \Aws\Api\DateTimeResult|null $FinishedAt
 * @property \Aws\Api\DateTimeResult|null $StartedAt
 * @property int|null $TotalRecordCount
 * @property int|null $InvalidRecordCount
 */
class BatchPrediction extends Shape
{
    /**
     * @param array{
     *     BatchPredictionId?: string|null,
     *     MLModelId?: string|null,
     *     BatchPredictionDataSourceId?: string|null,
     *     InputDataLocationS3?: string|null,
     *     CreatedByIamUser?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     Name?: string|null,
     *     Status?: 'PENDING'|'INPROGRESS'|'FAILED'|'COMPLETED'|'DELETED'|null,
     *     OutputUri?: string|null,
     *     Message?: string|null,
     *     ComputeTime?: int|null,
     *     FinishedAt?: \Aws\Api\DateTimeResult|null,
     *     StartedAt?: \Aws\Api\DateTimeResult|null,
     *     TotalRecordCount?: int|null,
     *     InvalidRecordCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
