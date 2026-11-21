<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAccessControlApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $Status
 * @property string $RequestId
 * @property string $ApplicationId
 * @property string $Arn
 * @property 'ENABLED'|'DISABLED' $AccessControlApplicationStatus
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 */
class UpdateAccessControlApplicationResponse extends Response
{
}
