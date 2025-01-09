<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPosition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceIdentifier
 * @property 'WirelessDevice'|'WirelessGateway' $ResourceType
 */
class GetPositionRequest extends Request
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
