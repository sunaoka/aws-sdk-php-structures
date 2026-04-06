<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $containerName
 * @property string|null $imageDigest
 * @property string|null $image
 */
class ContainerImage extends Shape
{
    /**
     * @param array{
     *     containerName?: string|null,
     *     imageDigest?: string|null,
     *     image?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
