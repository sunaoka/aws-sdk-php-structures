<?php

namespace Sunaoka\Aws\Structures\WorkMail\DescribeGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $GroupId
 * @property string $Name
 * @property string $Email
 * @property 'ENABLED'|'DISABLED'|'DELETED' $State
 * @property \Aws\Api\DateTimeResult $EnabledDate
 * @property \Aws\Api\DateTimeResult $DisabledDate
 * @property bool $HiddenFromGlobalAddressList
 */
class DescribeGroupResponse extends Response
{
}
