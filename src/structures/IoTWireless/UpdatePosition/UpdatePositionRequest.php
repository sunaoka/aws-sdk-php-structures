<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdatePosition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceIdentifier
 * @property 'WirelessDevice'|'WirelessGateway' $ResourceType
 * @property list<float> $Position
 */
class UpdatePositionRequest extends Request
{
    /**
     * @param array{
     *     ResourceIdentifier: string,
     *     ResourceType: 'WirelessDevice'|'WirelessGateway',
     *     Position: list<float>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
