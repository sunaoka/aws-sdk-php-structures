<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $containerName
 * @property string $imageDigest
 * @property string $image
 */
class ContainerImage extends Shape
{
    /**
     * @param array{
     *     containerName?: string,
     *     imageDigest?: string,
     *     image?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
