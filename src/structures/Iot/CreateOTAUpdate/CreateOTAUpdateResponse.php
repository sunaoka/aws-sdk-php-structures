<?php

namespace Sunaoka\Aws\Structures\Iot\CreateOTAUpdate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $otaUpdateId
 * @property string|null $awsIotJobId
 * @property string|null $otaUpdateArn
 * @property string|null $awsIotJobArn
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|null $otaUpdateStatus
 */
class CreateOTAUpdateResponse extends Response
{
}
