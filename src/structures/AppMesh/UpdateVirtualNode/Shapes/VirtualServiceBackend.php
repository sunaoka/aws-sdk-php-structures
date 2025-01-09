<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClientPolicy $clientPolicy
 * @property string $virtualServiceName
 */
class VirtualServiceBackend extends Shape
{
    /**
     * @param array{
     *     clientPolicy?: ClientPolicy,
     *     virtualServiceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
