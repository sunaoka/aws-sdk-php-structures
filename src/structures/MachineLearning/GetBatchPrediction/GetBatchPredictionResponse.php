<?php

namespace Sunaoka\Aws\Structures\MachineLearning\GetBatchPrediction;

use Sunaoka\Aws\Structures\Response;

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
 * @property string $LogUri
 * @property string $Message
 * @property int $ComputeTime
 * @property \Aws\Api\DateTimeResult $FinishedAt
 * @property \Aws\Api\DateTimeResult $StartedAt
 * @property int $TotalRecordCount
 * @property int $InvalidRecordCount
 */
class GetBatchPredictionResponse extends Response
{
}
