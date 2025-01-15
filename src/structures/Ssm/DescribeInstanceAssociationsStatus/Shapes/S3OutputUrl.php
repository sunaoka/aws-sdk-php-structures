<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstanceAssociationsStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OutputUrl
 */
class S3OutputUrl extends Shape
{
    /**
     * @param array{OutputUrl?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
