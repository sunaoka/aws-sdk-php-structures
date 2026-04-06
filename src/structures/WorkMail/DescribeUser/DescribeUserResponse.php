<?php

namespace Sunaoka\Aws\Structures\WorkMail\DescribeUser;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $UserId
 * @property string|null $Name
 * @property string|null $Email
 * @property string|null $DisplayName
 * @property 'ENABLED'|'DISABLED'|'DELETED'|null $State
 * @property 'USER'|'RESOURCE'|'SYSTEM_USER'|null $UserRole
 * @property \Aws\Api\DateTimeResult|null $EnabledDate
 * @property \Aws\Api\DateTimeResult|null $DisabledDate
 */
class DescribeUserResponse extends Response
{
}
