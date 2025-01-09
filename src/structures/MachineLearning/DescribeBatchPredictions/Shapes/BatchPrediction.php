<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DescribeBatchPredictions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BatchPredictionId
 * @property string $MLModelId
 * @property string $BatchPredictionDataSourceId
 * @property string $InputDataLocationS3
 * @property string $CreatedByIamUser
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property string $Name
 * @property 'PENDING'|'INPROGRESS'|'FAILED'|'COMPLETED'|'DELETED' $Status
 * @property string $OutputUri
 * @property string $Message
 * @property int $ComputeTime
 * @property \Aws\Api\DateTimeResult $FinishedAt
 * @property \Aws\Api\DateTimeResult $StartedAt
 * @property int $TotalRecordCount
 * @property int $InvalidRecordCount
 */
class BatchPrediction extends Shape
{
    /**
     * @param array{
     *     BatchPredictionId?: string,
     *     MLModelId?: string,
     *     BatchPredictionDataSourceId?: string,
     *     InputDataLocationS3?: string,
     *     CreatedByIamUser?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     Name?: string,
     *     Status?: 'PENDING'|'INPROGRESS'|'FAILED'|'COMPLETED'|'DELETED',
     *     OutputUri?: string,
     *     Message?: string,
     *     ComputeTime?: int,
     *     FinishedAt?: \Aws\Api\DateTimeResult,
     *     StartedAt?: \Aws\Api\DateTimeResult,
     *     TotalRecordCount?: int,
     *     InvalidRecordCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
