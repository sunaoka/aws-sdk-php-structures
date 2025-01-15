<?php

namespace Sunaoka\Aws\Structures\SSMContacts\GetRotationOverride;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $RotationOverrideId
 * @property string|null $RotationArn
 * @property list<string>|null $NewContactIds
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 */
class GetRotationOverrideResponse extends Response
{
}
