<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\UpdateCrossAccountAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EndpointId
 * @property string|null $Cidr
 * @property string|null $Region
 */
class ResourceShape extends Shape
{
    /**
     * @param array{
     *     EndpointId?: string|null,
     *     Cidr?: string|null,
     *     Region?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
