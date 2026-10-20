<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DescribeGatewayAlbConfiguration|null $hostSharedAlb
 */
class DescribeGatewayConfiguration extends Shape
{
    /**
     * @param array{hostSharedAlb?: DescribeGatewayAlbConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
