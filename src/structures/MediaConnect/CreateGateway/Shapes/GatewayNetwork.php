<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CidrBlock
 * @property string $Name
 */
class GatewayNetwork extends Shape
{
    /**
     * @param array{
     *     CidrBlock: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
