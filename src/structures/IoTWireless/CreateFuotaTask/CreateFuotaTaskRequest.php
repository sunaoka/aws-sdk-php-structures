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
 * @property int<0, 100> $RedundancyPercent
 * @property int<1, max> $FragmentSizeBytes
 * @property int<1, max> $FragmentIntervalMS
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
