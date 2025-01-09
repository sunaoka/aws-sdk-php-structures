<?php

namespace Sunaoka\Aws\Structures\Ecr\PutImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $imageDigest
 * @property string $imageTag
 */
class ImageIdentifier extends Shape
{
    /**
     * @param array{
     *     imageDigest?: string,
     *     imageTag?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
