<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageScanFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $imageDigest
 * @property string|null $imageTag
 */
class ImageIdentifier extends Shape
{
    /**
     * @param array{
     *     imageDigest?: string|null,
     *     imageTag?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
