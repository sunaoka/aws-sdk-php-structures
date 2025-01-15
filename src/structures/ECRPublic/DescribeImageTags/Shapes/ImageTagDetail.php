<?php

namespace Sunaoka\Aws\Structures\ECRPublic\DescribeImageTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $imageTag
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property ReferencedImageDetail|null $imageDetail
 */
class ImageTagDetail extends Shape
{
    /**
     * @param array{
     *     imageTag?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     imageDetail?: ReferencedImageDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
