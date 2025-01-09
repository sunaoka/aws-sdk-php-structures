<?php

namespace Sunaoka\Aws\Structures\SSMContacts\GetRotationOverride;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RotationOverrideId
 * @property string $RotationArn
 * @property list<string> $NewContactIds
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property \Aws\Api\DateTimeResult $CreateTime
 */
class GetRotationOverrideResponse extends Response
{
}
