<?php

namespace Sunaoka\Aws\Structures\Glue\ListMLTransforms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $DataType
 */
class SchemaColumn extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     DataType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
