<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateResourcePosition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceIdentifier
 * @property 'WirelessDevice'|'WirelessGateway' $ResourceType
 * @property string $GeoJsonPayload
 */
class UpdateResourcePositionRequest extends Request
{
    /**
     * @param array{
     *     ResourceIdentifier: string,
     *     ResourceType: 'WirelessDevice'|'WirelessGateway',
     *     GeoJsonPayload?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
