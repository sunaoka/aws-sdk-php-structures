<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StreamName
 * @property string|null $Network
 * @property list<InputRequestDestinationRoute>|null $NetworkRoutes
 * @property string|null $StaticIpAddress
 */
class InputDestinationRequest extends Shape
{
    /**
     * @param array{
     *     StreamName?: string|null,
     *     Network?: string|null,
     *     NetworkRoutes?: list<InputRequestDestinationRoute>|null,
     *     StaticIpAddress?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
