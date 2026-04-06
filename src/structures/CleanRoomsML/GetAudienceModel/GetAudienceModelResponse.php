<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetAudienceModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property \Aws\Api\DateTimeResult|null $trainingDataStartTime
 * @property \Aws\Api\DateTimeResult|null $trainingDataEndTime
 * @property string $audienceModelArn
 * @property string $name
 * @property string $trainingDatasetArn
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_PENDING'|'DELETE_IN_PROGRESS'|'DELETE_FAILED' $status
 * @property Shapes\StatusDetails|null $statusDetails
 * @property string|null $kmsKeyArn
 * @property array<string, string>|null $tags
 * @property string|null $description
 */
class GetAudienceModelResponse extends Response
{
}
