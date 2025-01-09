<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageScanFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceDetails $details
 * @property string $id
 * @property array<string, string> $tags
 * @property string $type
 */
class Resource extends Shape
{
    /**
     * @param array{
     *     details?: ResourceDetails,
     *     id?: string,
     *     tags?: array<string, string>,
     *     type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
