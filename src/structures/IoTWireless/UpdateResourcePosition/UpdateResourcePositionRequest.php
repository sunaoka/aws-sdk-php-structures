<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateResourcePosition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceIdentifier
 * @property 'WirelessDevice'|'WirelessGateway' $ResourceType
 * @property string|resource|\Psr\Http\Message\StreamInterface $GeoJsonPayload
 */
class UpdateResourcePositionRequest extends Request
{
    /**
     * @param array{
     *     ResourceIdentifier: string,
     *     ResourceType: 'WirelessDevice'|'WirelessGateway',
     *     GeoJsonPayload?: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
