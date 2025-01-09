<?php

namespace Sunaoka\Aws\Structures\Iam\GetMFADevice;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $UserName
 * @property string $SerialNumber
 * @property \Aws\Api\DateTimeResult $EnableDate
 * @property array<string, string> $Certifications
 */
class GetMFADeviceResponse extends Response
{
}
