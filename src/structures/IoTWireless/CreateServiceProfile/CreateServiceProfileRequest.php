<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateServiceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\LoRaWANServiceProfile $LoRaWAN
 * @property list<Shapes\Tag> $Tags
 * @property string $ClientRequestToken
 */
class CreateServiceProfileRequest extends Request
{
    /**
     * @param array{
     *     Name?: string,
     *     LoRaWAN?: Shapes\LoRaWANServiceProfile,
     *     Tags?: list<Shapes\Tag>,
     *     ClientRequestToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
