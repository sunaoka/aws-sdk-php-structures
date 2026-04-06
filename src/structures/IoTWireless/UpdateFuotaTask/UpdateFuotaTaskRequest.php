<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateFuotaTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $Name
 * @property string|null $Description
 * @property Shapes\LoRaWANFuotaTask|null $LoRaWAN
 * @property string|null $FirmwareUpdateImage
 * @property string|null $FirmwareUpdateRole
 * @property int<0, 100>|null $RedundancyPercent
 * @property int<1, max>|null $FragmentSizeBytes
 * @property int<1, max>|null $FragmentIntervalMS
 * @property string|null $Descriptor
 */
class UpdateFuotaTaskRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     LoRaWAN?: Shapes\LoRaWANFuotaTask|null,
     *     FirmwareUpdateImage?: string|null,
     *     FirmwareUpdateRole?: string|null,
     *     RedundancyPercent?: int<0, 100>|null,
     *     FragmentSizeBytes?: int<1, max>|null,
     *     FragmentIntervalMS?: int<1, max>|null,
     *     Descriptor?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
