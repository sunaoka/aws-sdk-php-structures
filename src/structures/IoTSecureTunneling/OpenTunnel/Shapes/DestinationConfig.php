<?php

namespace Sunaoka\Aws\Structures\IoTSecureTunneling\OpenTunnel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $thingName
 * @property list<string> $services
 */
class DestinationConfig extends Shape
{
    /**
     * @param array{
     *     thingName?: string|null,
     *     services: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
