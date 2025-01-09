<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateStoreImageTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string $Value
 */
class S3ObjectTag extends Shape
{
    /**
     * @param array{
     *     Key?: string,
     *     Value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
