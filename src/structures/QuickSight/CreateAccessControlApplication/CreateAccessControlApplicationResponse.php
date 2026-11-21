<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAccessControlApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $Status
 * @property string $RequestId
 * @property string $ApplicationId
 * @property string $Arn
 * @property 'ENABLED'|'DISABLED' $AccessControlApplicationStatus
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $TenantUrl
 * @property string|null $IdcApplicationArn
 * @property Shapes\QuickAuthenticationConfigCreateOutput|null $QuickAuthenticationConfiguration
 */
class CreateAccessControlApplicationResponse extends Response
{
}
