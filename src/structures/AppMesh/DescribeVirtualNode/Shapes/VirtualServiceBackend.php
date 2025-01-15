<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClientPolicy|null $clientPolicy
 * @property string $virtualServiceName
 */
class VirtualServiceBackend extends Shape
{
    /**
     * @param array{
     *     clientPolicy?: ClientPolicy|null,
     *     virtualServiceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
