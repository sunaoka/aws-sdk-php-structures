<?php

namespace Sunaoka\Aws\Structures\Glue\ListMLTransforms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $DataType
 */
class SchemaColumn extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     DataType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
