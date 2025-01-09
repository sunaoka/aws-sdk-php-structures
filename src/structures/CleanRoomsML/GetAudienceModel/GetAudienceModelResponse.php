<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetAudienceModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property \Aws\Api\DateTimeResult $trainingDataStartTime
 * @property \Aws\Api\DateTimeResult $trainingDataEndTime
 * @property string $audienceModelArn
 * @property string $name
 * @property string $trainingDatasetArn
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_PENDING'|'DELETE_IN_PROGRESS'|'DELETE_FAILED' $status
 * @property Shapes\StatusDetails $statusDetails
 * @property string $kmsKeyArn
 * @property array<string, string> $tags
 * @property string $description
 */
class GetAudienceModelResponse extends Response
{
}
