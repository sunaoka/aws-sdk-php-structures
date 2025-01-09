<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateDeviceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\LoRaWANDeviceProfile $LoRaWAN
 * @property list<Shapes\Tag> $Tags
 * @property string $ClientRequestToken
 * @property Shapes\SidewalkCreateDeviceProfile $Sidewalk
 */
class CreateDeviceProfileRequest extends Request
{
    /**
     * @param array{
     *     Name?: string,
     *     LoRaWAN?: Shapes\LoRaWANDeviceProfile,
     *     Tags?: list<Shapes\Tag>,
     *     ClientRequestToken?: string,
     *     Sidewalk?: Shapes\SidewalkCreateDeviceProfile
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
