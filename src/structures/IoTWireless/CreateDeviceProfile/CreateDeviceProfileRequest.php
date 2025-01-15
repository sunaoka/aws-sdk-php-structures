<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateDeviceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property Shapes\LoRaWANDeviceProfile|null $LoRaWAN
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ClientRequestToken
 * @property Shapes\SidewalkCreateDeviceProfile|null $Sidewalk
 */
class CreateDeviceProfileRequest extends Request
{
    /**
     * @param array{
     *     Name?: string|null,
     *     LoRaWAN?: Shapes\LoRaWANDeviceProfile|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ClientRequestToken?: string|null,
     *     Sidewalk?: Shapes\SidewalkCreateDeviceProfile|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
