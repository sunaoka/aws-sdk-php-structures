<?php

namespace Sunaoka\Aws\Structures\WorkMail\DescribeResource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ResourceId
 * @property string $Email
 * @property string $Name
 * @property 'ROOM'|'EQUIPMENT' $Type
 * @property Shapes\BookingOptions $BookingOptions
 * @property 'ENABLED'|'DISABLED'|'DELETED' $State
 * @property \Aws\Api\DateTimeResult $EnabledDate
 * @property \Aws\Api\DateTimeResult $DisabledDate
 * @property string $Description
 * @property bool $HiddenFromGlobalAddressList
 */
class DescribeResourceResponse extends Response
{
}
