<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeApplicationStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Code
 * @property int|null $StatusCode
 * @property string|null $Protocol
 */
class ApplicationStatusReason extends Shape
{
    /**
     * @param array{
     *     Code?: string|null,
     *     StatusCode?: int|null,
     *     Protocol?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
