<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreatePartnerInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Ip
 * @property string $Port
 * @property string $Url
 * @property InputDestinationVpc $Vpc
 * @property string $Network
 * @property list<InputDestinationRoute> $NetworkRoutes
 */
class InputDestination extends Shape
{
    /**
     * @param array{
     *     Ip?: string,
     *     Port?: string,
     *     Url?: string,
     *     Vpc?: InputDestinationVpc,
     *     Network?: string,
     *     NetworkRoutes?: list<InputDestinationRoute>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
