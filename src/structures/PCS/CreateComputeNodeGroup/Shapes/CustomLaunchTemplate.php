<?php

namespace Sunaoka\Aws\Structures\PCS\CreateComputeNodeGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $version
 */
class CustomLaunchTemplate extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
