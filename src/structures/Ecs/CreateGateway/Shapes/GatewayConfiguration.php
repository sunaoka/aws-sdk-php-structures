<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HostSharedAlbConfiguration|null $hostSharedAlb
 */
class GatewayConfiguration extends Shape
{
    /**
     * @param array{hostSharedAlb?: HostSharedAlbConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
