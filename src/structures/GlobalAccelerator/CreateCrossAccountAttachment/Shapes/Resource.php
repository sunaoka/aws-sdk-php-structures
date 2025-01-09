<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\CreateCrossAccountAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointId
 * @property string $Cidr
 * @property string $Region
 */
class Resource extends Shape
{
    /**
     * @param array{
     *     EndpointId?: string,
     *     Cidr?: string,
     *     Region?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
