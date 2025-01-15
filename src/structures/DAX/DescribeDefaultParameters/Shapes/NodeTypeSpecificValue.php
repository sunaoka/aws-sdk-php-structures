<?php

namespace Sunaoka\Aws\Structures\DAX\DescribeDefaultParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NodeType
 * @property string|null $Value
 */
class NodeTypeSpecificValue extends Shape
{
    /**
     * @param array{
     *     NodeType?: string|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
