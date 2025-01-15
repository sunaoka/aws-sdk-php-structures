<?php

namespace Sunaoka\Aws\Structures\Iam\GetMFADevice;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $UserName
 * @property string $SerialNumber
 * @property \Aws\Api\DateTimeResult|null $EnableDate
 * @property array<string, string>|null $Certifications
 */
class GetMFADeviceResponse extends Response
{
}
