<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetMobileDeviceAccessOverride;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $UserId
 * @property string|null $DeviceId
 * @property 'ALLOW'|'DENY'|null $Effect
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $DateCreated
 * @property \Aws\Api\DateTimeResult|null $DateModified
 */
class GetMobileDeviceAccessOverrideResponse extends Response
{
}
