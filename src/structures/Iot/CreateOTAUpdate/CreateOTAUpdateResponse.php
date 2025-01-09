<?php

namespace Sunaoka\Aws\Structures\Iot\CreateOTAUpdate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $otaUpdateId
 * @property string $awsIotJobId
 * @property string $otaUpdateArn
 * @property string $awsIotJobArn
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED' $otaUpdateStatus
 */
class CreateOTAUpdateResponse extends Response
{
}
