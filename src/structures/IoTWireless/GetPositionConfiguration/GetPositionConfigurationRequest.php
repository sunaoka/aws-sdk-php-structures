<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceIdentifier
 * @property 'WirelessDevice'|'WirelessGateway' $ResourceType
 */
class GetPositionConfigurationRequest extends Request
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
