<?php

namespace Sunaoka\Aws\Structures\IoTSecureTunneling\RotateTunnelAccessToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $thingName
 * @property list<string> $services
 */
class DestinationConfig extends Shape
{
    /**
     * @param array{
     *     thingName?: string,
     *     services: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
