<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateFuotaTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property string $ClientRequestToken
 * @property Shapes\LoRaWANFuotaTask $LoRaWAN
 * @property string $FirmwareUpdateImage
 * @property string $FirmwareUpdateRole
 * @property list<Shapes\Tag> $Tags
 * @property int $RedundancyPercent
 * @property int $FragmentSizeBytes
 * @property int $FragmentIntervalMS
 * @property string $Descriptor
 */
class CreateFuotaTaskRequest extends Request
{
    /**
     * @param array{
     *     Name?: string,
     *     Description?: string,
     *     ClientRequestToken?: string,
     *     LoRaWAN?: Shapes\LoRaWANFuotaTask,
     *     FirmwareUpdateImage: string,
     *     FirmwareUpdateRole: string,
     *     Tags?: list<Shapes\Tag>,
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
