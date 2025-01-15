<?php

namespace Sunaoka\Aws\Structures\MachineLearning\GetBatchPrediction;

use Sunaoka\Aws\Structures\Response;

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
 * @property string|null $LogUri
 * @property string|null $Message
 * @property int|null $ComputeTime
 * @property \Aws\Api\DateTimeResult|null $FinishedAt
 * @property \Aws\Api\DateTimeResult|null $StartedAt
 * @property int|null $TotalRecordCount
 * @property int|null $InvalidRecordCount
 */
class GetBatchPredictionResponse extends Response
{
}
