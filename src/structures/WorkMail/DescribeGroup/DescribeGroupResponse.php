<?php

namespace Sunaoka\Aws\Structures\WorkMail\DescribeGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $GroupId
 * @property string|null $Name
 * @property string|null $Email
 * @property 'ENABLED'|'DISABLED'|'DELETED'|null $State
 * @property \Aws\Api\DateTimeResult|null $EnabledDate
 * @property \Aws\Api\DateTimeResult|null $DisabledDate
 */
class DescribeGroupResponse extends Response
{
}
