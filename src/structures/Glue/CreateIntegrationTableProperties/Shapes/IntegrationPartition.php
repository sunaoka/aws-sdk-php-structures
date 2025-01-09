<?php

namespace Sunaoka\Aws\Structures\Glue\CreateIntegrationTableProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldName
 * @property string $FunctionSpec
 */
class IntegrationPartition extends Shape
{
    /**
     * @param array{
     *     FieldName?: string,
     *     FunctionSpec?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
