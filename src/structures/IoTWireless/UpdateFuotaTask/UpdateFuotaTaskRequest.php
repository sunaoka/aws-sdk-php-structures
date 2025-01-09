<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateFuotaTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property Shapes\LoRaWANFuotaTask $LoRaWAN
 * @property string $FirmwareUpdateImage
 * @property string $FirmwareUpdateRole
 * @property int $RedundancyPercent
 * @property int $FragmentSizeBytes
 * @property int $FragmentIntervalMS
 * @property string $Descriptor
 */
class UpdateFuotaTaskRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Name?: string,
     *     Description?: string,
     *     LoRaWAN?: Shapes\LoRaWANFuotaTask,
     *     FirmwareUpdateImage?: string,
     *     FirmwareUpdateRole?: string,
     *     RedundancyPercent?: int,
     *     FragmentSizeBytes?: int,
     *     FragmentIntervalMS?: int,
     *     Descriptor?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
