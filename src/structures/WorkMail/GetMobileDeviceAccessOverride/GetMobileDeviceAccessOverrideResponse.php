<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetMobileDeviceAccessOverride;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $UserId
 * @property string $DeviceId
 * @property 'ALLOW'|'DENY' $Effect
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $DateCreated
 * @property \Aws\Api\DateTimeResult $DateModified
 */
class GetMobileDeviceAccessOverrideResponse extends Response
{
}
