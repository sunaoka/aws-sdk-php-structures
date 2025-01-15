<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateFuotaTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $ClientRequestToken
 * @property Shapes\LoRaWANFuotaTask|null $LoRaWAN
 * @property string $FirmwareUpdateImage
 * @property string $FirmwareUpdateRole
 * @property list<Shapes\Tag>|null $Tags
 * @property int<0, 100>|null $RedundancyPercent
 * @property int<1, max>|null $FragmentSizeBytes
 * @property int<1, max>|null $FragmentIntervalMS
 * @property string|null $Descriptor
 */
class CreateFuotaTaskRequest extends Request
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Description?: string|null,
     *     ClientRequestToken?: string|null,
     *     LoRaWAN?: Shapes\LoRaWANFuotaTask|null,
     *     FirmwareUpdateImage: string,
     *     FirmwareUpdateRole: string,
     *     Tags?: list<Shapes\Tag>|null,
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
