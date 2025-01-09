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
 * @property int<0, 100> $RedundancyPercent
 * @property int<1, max> $FragmentSizeBytes
 * @property int<1, max> $FragmentIntervalMS
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
     *     RedundancyPercent?: int<0, 100>,
     *     FragmentSizeBytes?: int<1, max>,
     *     FragmentIntervalMS?: int<1, max>,
     *     Descriptor?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
