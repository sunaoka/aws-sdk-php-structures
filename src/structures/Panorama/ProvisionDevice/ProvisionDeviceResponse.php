<?php

namespace Sunaoka\Aws\Structures\Panorama\ProvisionDevice;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property \Psr\Http\Message\StreamInterface $Certificates
 * @property string $DeviceId
 * @property string $IotThingName
 * @property 'AWAITING_PROVISIONING'|'PENDING'|'SUCCEEDED'|'FAILED'|'ERROR'|'DELETING' $Status
 */
class ProvisionDeviceResponse extends Response
{
}
