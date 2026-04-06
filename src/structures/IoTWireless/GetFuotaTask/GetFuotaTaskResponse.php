<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetFuotaTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $Id
 * @property 'Pending'|'FuotaSession_Waiting'|'In_FuotaSession'|'FuotaDone'|'Delete_Waiting'|null $Status
 * @property string|null $Name
 * @property string|null $Description
 * @property Shapes\LoRaWANFuotaTaskGetInfo|null $LoRaWAN
 * @property string|null $FirmwareUpdateImage
 * @property string|null $FirmwareUpdateRole
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property int<0, 100>|null $RedundancyPercent
 * @property int<1, max>|null $FragmentSizeBytes
 * @property int<1, max>|null $FragmentIntervalMS
 * @property string|null $Descriptor
 */
class GetFuotaTaskResponse extends Response
{
}
