<?php

namespace Sunaoka\Aws\Structures\ECRPublic\DescribeImageTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $imageTag
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property ReferencedImageDetail $imageDetail
 */
class ImageTagDetail extends Shape
{
    /**
     * @param array{
     *     imageTag?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     imageDetail?: ReferencedImageDetail
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
