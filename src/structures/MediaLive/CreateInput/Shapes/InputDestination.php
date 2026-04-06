<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Ip
 * @property string|null $Port
 * @property string|null $Url
 * @property InputDestinationVpc|null $Vpc
 * @property string|null $Network
 * @property list<InputDestinationRoute>|null $NetworkRoutes
 */
class InputDestination extends Shape
{
    /**
     * @param array{
     *     Ip?: string|null,
     *     Port?: string|null,
     *     Url?: string|null,
     *     Vpc?: InputDestinationVpc|null,
     *     Network?: string|null,
     *     NetworkRoutes?: list<InputDestinationRoute>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
