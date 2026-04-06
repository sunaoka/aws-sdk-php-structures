<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListCrossAccountResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EndpointId
 * @property string|null $Cidr
 * @property string|null $AttachmentArn
 */
class CrossAccountResource extends Shape
{
    /**
     * @param array{
     *     EndpointId?: string|null,
     *     Cidr?: string|null,
     *     AttachmentArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
