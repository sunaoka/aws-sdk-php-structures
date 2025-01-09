<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetFuotaTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Id
 * @property 'Pending'|'FuotaSession_Waiting'|'In_FuotaSession'|'FuotaDone'|'Delete_Waiting' $Status
 * @property string $Name
 * @property string $Description
 * @property Shapes\LoRaWANFuotaTaskGetInfo $LoRaWAN
 * @property string $FirmwareUpdateImage
 * @property string $FirmwareUpdateRole
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property int $RedundancyPercent
 * @property int $FragmentSizeBytes
 * @property int $FragmentIntervalMS
 * @property string $Descriptor
 */
class GetFuotaTaskResponse extends Response
{
}
