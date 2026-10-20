<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property list<string> $values
 */
class GatewayTestTrafficHeader extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
