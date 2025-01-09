<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $medium
 * @property string $sizeLimit
 */
class EksEmptyDir extends Shape
{
    /**
     * @param array{
     *     medium?: string,
     *     sizeLimit?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
