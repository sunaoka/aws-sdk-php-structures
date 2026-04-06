<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Managed
 * @property string|null $Principal
 */
class OperatorResponse extends Shape
{
    /**
     * @param array{
     *     Managed?: bool|null,
     *     Principal?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
