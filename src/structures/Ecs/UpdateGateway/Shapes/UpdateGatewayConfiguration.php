<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateGatewayAlbConfiguration|null $hostSharedAlb
 */
class UpdateGatewayConfiguration extends Shape
{
    /**
     * @param array{hostSharedAlb?: UpdateGatewayAlbConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
