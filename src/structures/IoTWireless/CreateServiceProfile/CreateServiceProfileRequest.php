<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateServiceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property Shapes\LoRaWANServiceProfile|null $LoRaWAN
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ClientRequestToken
 */
class CreateServiceProfileRequest extends Request
{
    /**
     * @param array{
     *     Name?: string|null,
     *     LoRaWAN?: Shapes\LoRaWANServiceProfile|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ClientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
