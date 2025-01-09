<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetResourcePosition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceIdentifier
 * @property 'WirelessDevice'|'WirelessGateway' $ResourceType
 */
class GetResourcePositionRequest extends Request
{
    /**
     * @param array{
     *     ResourceIdentifier: string,
     *     ResourceType: 'WirelessDevice'|'WirelessGateway'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
