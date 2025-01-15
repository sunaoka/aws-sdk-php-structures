<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageScanFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceDetails|null $details
 * @property string|null $id
 * @property array<string, string>|null $tags
 * @property string|null $type
 */
class Resource extends Shape
{
    /**
     * @param array{
     *     details?: ResourceDetails|null,
     *     id?: string|null,
     *     tags?: array<string, string>|null,
     *     type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
