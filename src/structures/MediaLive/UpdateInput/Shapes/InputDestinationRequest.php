<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StreamName
 * @property string $Network
 * @property list<InputRequestDestinationRoute> $NetworkRoutes
 * @property string $StaticIpAddress
 */
class InputDestinationRequest extends Shape
{
    /**
     * @param array{
     *     StreamName?: string,
     *     Network?: string,
     *     NetworkRoutes?: list<InputRequestDestinationRoute>,
     *     StaticIpAddress?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
