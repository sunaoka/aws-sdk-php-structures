<?php

namespace Sunaoka\Aws\Structures\DAX\DescribeDefaultParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NodeType
 * @property string $Value
 */
class NodeTypeSpecificValue extends Shape
{
    /**
     * @param array{
     *     NodeType?: string,
     *     Value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
