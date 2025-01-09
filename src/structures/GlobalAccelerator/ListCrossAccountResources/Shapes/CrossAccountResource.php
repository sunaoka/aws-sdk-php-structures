<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListCrossAccountResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointId
 * @property string $Cidr
 * @property string $AttachmentArn
 */
class CrossAccountResource extends Shape
{
    /**
     * @param array{
     *     EndpointId?: string,
     *     Cidr?: string,
     *     AttachmentArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
