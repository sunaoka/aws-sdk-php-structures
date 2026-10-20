<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GatewayConnectionAlbResources>|null $hostSharedAlb
 */
class GatewayConnectionResources extends Shape
{
    /**
     * @param array{hostSharedAlb?: list<GatewayConnectionAlbResources>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
