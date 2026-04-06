<?php

namespace Sunaoka\Aws\Structures\WorkMail\DescribeResource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ResourceId
 * @property string|null $Email
 * @property string|null $Name
 * @property 'ROOM'|'EQUIPMENT'|null $Type
 * @property Shapes\BookingOptions|null $BookingOptions
 * @property 'ENABLED'|'DISABLED'|'DELETED'|null $State
 * @property \Aws\Api\DateTimeResult|null $EnabledDate
 * @property \Aws\Api\DateTimeResult|null $DisabledDate
 */
class DescribeResourceResponse extends Response
{
}
